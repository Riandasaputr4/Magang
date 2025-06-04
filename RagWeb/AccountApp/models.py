from django.contrib.auth.models import AbstractUser
from django.db import models

class CustomUser(AbstractUser):
    is_verified_by_superadmin = models.BooleanField(default=False)
