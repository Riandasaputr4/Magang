from django.shortcuts import render, redirect
from django.contrib.auth import authenticate, login
from django.contrib.auth import logout as auth_logout
from django.contrib import messages
from django.utils.http import url_has_allowed_host_and_scheme
from django.contrib.auth import get_user_model
from django.contrib.auth.models import Group, User

User = get_user_model()





# Create your views here.

def dashboard(request):
    return render(request, 'AccountApp/Index.html')

def login_view(request):
    if request.method == 'POST':
        username = request.POST.get('username')
        password = request.POST.get('password')
        user = authenticate(request, username=username, password=password)

        if user is not None:
            login(request, user)
            next_url = request.GET.get('next')
            
            # Validasi next URL agar tidak error redirect
            if next_url and url_has_allowed_host_and_scheme(next_url, allowed_hosts={request.get_host()}):
                return redirect(next_url)
            
            return redirect('dashboardAdmin' if user.is_staff else 'dashboardUser')
        else:
            messages.error(request, 'Username atau password salah.')
    return render(request, 'AccountApp/Login.html')

def register(request):
    if request.method == 'POST':
        username = request.POST.get('username')
        password = request.POST.get('password')

        if User.objects.filter(username=username).exists():
            messages.error(request, 'Username sudah digunakan.')
        else:
            user = User.objects.create_user(username=username, password=password)

            # Tambahkan ke grup 'User' jika tersedia
            try:
                user_group = Group.objects.get(name='User')
                user.groups.add(user_group)
            except Group.DoesNotExist:
                pass

            # Tambahkan ke grup 'customer'
            group, created = Group.objects.get_or_create(name='customer')
            user.groups.add(group)

            messages.success(request, 'Akun berhasil dibuat. Silakan login.')
            return redirect('login')

    return render(request, 'AccountApp/Regis.html')
def logout(request):
    auth_logout(request)  # Ini yang benar-benar memutus sesi
    return redirect('login')  # Jangan pakai render