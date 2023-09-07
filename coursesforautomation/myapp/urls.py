# appname/urls.py
from django.urls import path
from . import views

urlpatterns = [
    path('', views.home, name='home'),
    path('app1/', views.app1_page, name='app1_page'),
    path('app2/', views.app2_page, name='app2_page'),
    path('app3/', views.app3_page, name='app3_page'),
]