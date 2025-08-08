<x-mail::message>
# Bem-vindo(a) ao {{ config('app.name') }}!

Olá!

Estamos muito felizes por ter você conosco. 🎉  
Esperamos que sua experiência seja incrível e cheia de conquistas.

Se você tiver alguma dúvida ou precisar de ajuda, estamos sempre por aqui.

<x-mail::button :url="url('/')">
Acessar o site
</x-mail::button>

Obrigado por fazer parte da nossa comunidade!  
Até breve!

Atenciosamente,  
{{ config('app.name') }}
</x-mail::message>
