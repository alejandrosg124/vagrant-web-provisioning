
# Taller Vagrant + Provisionamiento con Shell

## Descripción
Este proyecto es un laboratorio para aprender a usar Vagrant y el provisionamiento automático con Shell. Se crean dos máquinas virtuales: una para la web y otra para la base de datos, conectadas en red privada. El objetivo es automatizar la instalación y configuración de servicios web y de base de datos, y conectar ambos mediante una página PHP.

## Estructura del proyecto

```
├── LICENSE
├── provision-db.sh         # provisionamiento base de datos
├── provision-web.sh        # provisionamiento  web
├── README.md
├── Vagrantfile             # Archivo vagrantfile
└── www/
	├── index.html          # Página principal
	└── info.php            # Página PHP para mostrar datos de la BD
```


## Pasos de ejecución  del laboratorio
1. Se hizo fork y luego clon al repositorio indicado
	```bash
	https://github.com/jmaquin0/vagrant-web-provisioning.git
	```
<img width="982" height="140" alt="Captura de Pantalla 2025-11-04 a la(s) 12 03 15 a m" src="https://github.com/user-attachments/assets/7b438db6-d8a7-4305-be71-b156697bbcdf" />

 
2. Se levantaron las máquinas virtuales:
	```bash
	vagrant up

	```
<img width="806" height="174" alt="Captura de Pantalla 2025-11-04 a la(s) 12 36 07 a m" src="https://github.com/user-attachments/assets/2e641eb2-b851-4fe9-8b3f-b42b1bbc6d4d" />

 
3. Link acceso navegador: [http://192.168.56.10](http://192.168.56.10)
<img width="1262" height="913" alt="Captura de Pantalla 2025-11-04 a la(s) 12 36 40 a m" src="https://github.com/user-attachments/assets/57384c85-c020-4246-b3d0-17754ad2884d" />


## Reto
1. Se completó el script `provision-db.sh` para instalar PostgreSQL automáticamente en la máquina db
2. Se creó una base de datos y una tabla llamada `amigos` con algunos registros de ejemplo.
3. Se modificó `info.php` para conectarse a la base de datos PostgreSQL y mostrar los datos de la tabla `amigos`.
