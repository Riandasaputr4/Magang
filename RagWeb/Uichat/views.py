from django.shortcuts import render

# Create your views here.
def home(request):
    return render(request, 'Chat/dashboard.html')
def chat(request):
    return render(request, 'Chat/chat.html')
def knowladge( request):
    return render(request, 'Chat/knowladge.html')
def api(request):
    return render(request, 'Chat/api.html')


