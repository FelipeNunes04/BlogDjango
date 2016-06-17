from django.conf.urls import include, url
from contato.views import *


urlpatterns =[
    url(r'^contato/$', form, name='contato_form'),

    url(r'^contato/sucesso/$', ContatoSuccess.as_view(), name='contato_success'),
]
