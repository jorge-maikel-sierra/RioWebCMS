<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://i.postimg.cc/VvN26jgy/Logo-Rio-Web-CMS.png" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/jorge-maikel-sierra/RioWebCMS"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://github.com/jorge-maikel-sierra/RioWebCMS"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://github.com/jorge-maikel-sierra/RioWebCMS"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://github.com/jorge-maikel-sierra/RioWebCMS"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## RioWebCMS

RioWebCMS es un portafolio tipo landing page diseñado para presentar los servicios de desarrollo web de la empresa. Está desarrollado en Laravel y utiliza DDEV como herramienta de desarrollo para ofrecer una configuración rápida y flexible.
### Descargando el proyecto en tu maquina 

#### Instala 

[Docker](https://www.docker.com/ "Docker")

[DDEV ](https://ddev.com/get-started/ "DDEV ")

`git clone https://github.com/jorge-maikel-sierra/RioWebCMS.git  `

`cd RioWebCMS`

`ddev config --project-type=laravel --docroot=public --omit-containers=db --disable-settings-management=true`

`ddev start`

`ddev composer install`

`ddev launch`


Con esto estas listo para replicar el sitio en tu maquina local 

## 🤝 Contribuyendo a RioWebCMS  

¡Gracias por tu interés en contribuir a **RioWebCMS**! Tu ayuda es valiosa para mejorar y expandir este proyecto.  

### 🛠 Pasos para Contribuir  

`ddev exec git add .`

`ddev exec 'git commit -m "Mi primer commit`

`ddev exec git push origin main`

## Codigo de conducta

Con el fin de garantizar que la comunidad RioWebCMS sea acogedora para todos, por favor, revise y respete el [Codigo de conducta](https://laravel.com/docs/contributions#code-of-conduct).


## License

La pagina RioWebCMS es un software de código abierto licenciado bajo la [MIT license](https://opensource.org/licenses/MIT).
