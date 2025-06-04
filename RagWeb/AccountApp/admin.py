from django.contrib import admin
from django.contrib.auth import get_user_model
from django.contrib.auth.admin import UserAdmin as BaseUserAdmin
from django.contrib.admin.sites import NotRegistered

User = get_user_model()

# Hanya unregister jika sudah terdaftar
try:
    admin.site.unregister(User)
except NotRegistered:
    pass  # Abaikan jika belum terdaftar

class CustomUserAdmin(BaseUserAdmin):
    def has_delete_permission(self, request, obj=None):
        if obj and obj.is_staff and not request.user.is_superuser:
            return False
        return super().has_delete_permission(request, obj)

admin.site.register(User, CustomUserAdmin)
