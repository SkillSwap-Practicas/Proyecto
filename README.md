# Proyecto de Practicas

## Integrantes
- Fredi Caballero
- Jean Suarez
- Nilo Vallejo
- Maicol Ramos

## Descripción

SkillSwap es una plataforma que tiene como objetivo facilitar el intercambio flexible de servicios entre sus usuarios, permitiéndoles tanto ofrecer sus propios talentos y habilidades a través de "oficios" y "talentos", como encontrar servicios de otros usuarios para contratar.

Además, los usuarios pueden proponer "retos" que requieran de estos servicios y que son financiados colectivamente por el resto de la comunidad a través de métodos de pago habilitados como Stripe y PayPal, generando así un sistema de financiación colectiva de proyectos.

Asimismo, cada servicio contratado puede ser calificado por los usuarios que los usaron, lo que genera reputación y valoración de perfiles.

Finalmente, existe un espacio de comunicación entre los miembros y comentarios asociados a cada reto para coordinar servicios, realizar consultas y aportar feedback, creando así una plataforma integral que busca facilitar el intercambio flexible de servicios profesionales entre pares de forma abierta, transparente y mediante la evaluación y el apoyo mutuo de la propia comunidad.

## Ejecutar proyecto SkillSwap

1. Clona el repositorio de tu proyecto desde tu terminal  
git clone "https://github.com/SkillSwap-Practicas/Proyecto.git"

2. Accede al directorio del proyecto  
cd Proyecto

3. Instala las dependencias de Composer  
composer install

4. Copia el archivo de entorno de ejemplo  
copy .env.example .env

5. Genera la clave de la aplicación  
php artisan key:generate

6. Inicia el Servidor de Desarrollo  
php artisan serve

7. Accede a la Aplicación  
Abre tu navegador y visita http://localhost:8000
