"""
URL configuration for RagWeb project.

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/5.1/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from django.conf import settings
from django.conf.urls.static import static
import Uichat.views as uichat_views
import AccountApp.views as account_views

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', account_views.dashboard, name='dashboard'),
    path('login/', account_views.login_view, name='login'), 
    path('register/', account_views.register, name='register'),
    path('dashboardAdmin/', uichat_views.dashboard_admin, name='dashboardAdmin'),
    path('logout/', account_views.logout, name='logout'),
    path('dashboardUser/', uichat_views.dashboardUser, name='dashboardUser'),
    path('chat/', uichat_views.chat, name='chat'),
    path('chat/api/', uichat_views.chat_view, name='chat_view'),
    path('knowladge/', uichat_views.knowladge, name='knowladge'),
    path('api/', uichat_views.api, name='api'),

]

if settings.DEBUG:
    urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)