from django.shortcuts import render


def home(request):
    return render(request, 'myapp/index.html')


def home(request):
    return render(request, 'myapp/index.html')


def app1_page(request):
    return render(request, 'myapp/app1_page.html')


def app2_page(request):
    return render(request, 'myapp/app2_page.html')


def app3_page(request):
    return render(request, 'myapp/app3_page.html')