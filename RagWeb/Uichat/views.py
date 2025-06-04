from django.shortcuts import render, redirect
from django.http import JsonResponse
from django.views.decorators.csrf import csrf_exempt
from django.views.decorators.http import require_POST
from django.contrib.auth.decorators import login_required, user_passes_test


# Dashboard admin (hanya untuk user.is_staff == True)
@login_required(login_url='login')
@user_passes_test(lambda u: u.is_staff, login_url='login')
def dashboard_admin(request):
    return render(request, 'Chat/dashboard.html')

# Dashboard user biasa (user.is_staff == False)
@login_required(login_url='login')
@user_passes_test(lambda u: not u.is_staff, login_url='login')
def dashboardUser(request):
    return render(request, 'Chat/DashboardUser.html')

# Chat view (jika ingin hanya bisa digunakan saat login)
@login_required(login_url='login')
def chat(request):
    return render(request, 'Chat/chat.html')

# AJAX Chat Handler
@csrf_exempt  # Gunakan hanya kalau CSRF token belum di-handle
@require_POST
@login_required(login_url='login')  # Opsional, jika hanya user login boleh chat
def chat_view(request):
    message = request.POST.get('message', '').strip()
    if not message:
        return JsonResponse({'response': 'Pesan tidak boleh kosong.'}, status=400)
    # TODO: Ganti dengan AI actual
    response_text = f"Anda mengatakan: {message}"
    return JsonResponse({'response': response_text})

# Halaman knowledge
@login_required(login_url='login')
def knowladge(request):
    return render(request, 'Chat/knowladge.html')

# Halaman API
@login_required(login_url='login')
def api(request):
    return render(request, 'Chat/api.html')
