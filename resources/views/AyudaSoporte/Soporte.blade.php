@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content_header')
    <!-- Aquí puedes agregar cualquier encabezado específico si lo necesitas -->
@stop

@section('content')
    <!-- Agregar enlaces a las bibliotecas de estilos y scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.bootstrap5.css">


    <!-- Estructura de las pestañas de navegación -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#PreguntasFrecuentes" data-toggle="tab">Preguntas Frecuentes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#documentacion" data-toggle="tab">Documentacion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#contactoSoporte" data-toggle="tab">Contacto De Soporte</a>
        </li>
    </ul>

    <!-- Contenido que se mostrará según la pestaña seleccionada -->
    <div class="tab-content">
        <div id="PreguntasFrecuentes" class="tab-pane fade show active">
            <!-- Contenido para "Preguntas Frecuentes" -->
            <!-- Tu contenido actual para preguntas frecuentes -->
    <div class="row mt-5">
        <div class="col-md-6 mt-4">
            <div class="p-4 border rounded bg-light">
                <h4 class="text-primary mb-3">¿Qué es un sistema contable?</h4>
                <p>Un sistema contable es un conjunto de procedimientos, políticas y herramientas utilizadas para registrar, 
                procesar, analizar y presentar la información financiera de una organización. 
                Su objetivo principal es proporcionar información precisa y oportuna para la toma de decisiones empresariales.</p>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <div class="p-4 border rounded bg-light">
                <h4 class="text-primary mb-3">¿Cuáles son los componentes principales de un sistema contable?</h4>
                <p>Los componentes principales de un sistema contable incluyen el libro mayor, los libros auxiliares, 
                los estados financieros, los informes contables, los procedimientos de control interno, el software contable, 
                y las políticas y procedimientos contables.</p>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <div class="p-4 border rounded bg-light">
                <h4 class="text-primary mb-3">¿Cuál es la diferencia entre el libro mayor y los libros auxiliares?</h4>
                <p>El libro mayor es el registro principal que contiene un resumen de todas las transacciones 
                financieras de la empresa, mientras que los libros auxiliares son registros detallados que se utilizan 
                para desglosar ciertas cuentas del libro mayor, como cuentas por cobrar, cuentas por pagar, inventario, entre otros.</p>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <div class="p-4 border rounded bg-light">
                <h4 class="text-primary mb-3">¿Cómo se hace un registro del libro mayor?</h4>
                <p>El registro del libro mayor es el proceso de registrar todas las transacciones financieras de una empresa de manera organizada. 
                Se hace siguiendo estos pasos: Identificar las cuentas del libro mayor, registrar las transacciones utilizando el método de partida doble, 
                transferir las entradas del diario al libro mayor, calcular los saldos de las cuentas y preparar los estados financieros utilizando la información del libro mayor.</p>
            </div>
        </div>
    </div>
        </div>
       
        <div id="documentacion" class="tab-pane fade">
          <!-- Contenido para "Documentacion" -->
          <div class="container">
              <h1 class="mt-4">Documentación</h1>
              <div class="accordion mt-4" id="accordionDocumentacion">
      
                  <!-- Sección de Introducción -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingIntroduccion">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIntroduccion" aria-expanded="true" aria-controls="collapseIntroduccion">
                              1. Introducción
                          </button>
                      </h2>
                      <div id="collapseIntroduccion" class="accordion-collapse collapse show" aria-labelledby="headingIntroduccion" data-bs-parent="#accordionDocumentacion">
                        <div class="accordion-body" style="text-align: justify;">
                            <p>El proyecto "Sistema Contable Villas Las Acacias" es una iniciativa desarrollada por la empresa Villas Las Acacias con el objetivo de modernizar y optimizar la gestión de sus actividades contables y financieras. Villas Las Acacias es una empresa dedicada al desarrollo y gestión de propiedades residenciales y comerciales en el área metropolitana.</p>
                            <p>El objetivo principal del proyecto es desarrollar una aplicación web que permita automatizar y centralizar el registro, procesamiento y análisis de la información financiera de la empresa. Esto incluye funciones como la contabilización de transacciones, la generación de informes financieros, el seguimiento de cuentas por cobrar y cuentas por pagar, entre otras.</p>
                            <p>El alcance del proyecto abarca desde la definición de los requisitos iniciales hasta la implementación y puesta en marcha del sistema contable. Se espera que la nueva aplicación mejore la eficiencia operativa, reduzca los errores de registro y proporcione a la empresa una visión más clara y detallada de su situación financiera.</p>
                        </div>
                    </div>
                    
                  </div>
      
                  <!-- Sección de Requisitos Iniciales -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingRequisitosIniciales">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRequisitosIniciales" aria-expanded="false" aria-controls="collapseRequisitosIniciales">
                              2. Requisitos Iniciales
                          </button>
                      </h2>
                      <div id="collapseRequisitosIniciales" class="accordion-collapse collapse" aria-labelledby="headingRequisitosIniciales" data-bs-parent="#accordionDocumentacion">
                          <div class="accordion-body">
                              <p>Los requisitos iniciales del proyecto fueron establecidos en colaboración con el equipo de contabilidad de Villas Las Acacias y se detallan a continuación:</p>
                              <ul>
                                  <li>Desarrollar un sistema de contabilidad completo y seguro.</li>
                                  <li>Permitir el registro y seguimiento de transacciones financieras.</li>
                                  <li>Generar informes financieros precisos y personalizables.</li>
                                  <!-- Agrega más requisitos según sea necesario -->
                              </ul>
                          </div>
                      </div>
                  </div>
      
                  <!-- Sección de Herramientas Utilizadas -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingHerramientasUtilizadas">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHerramientasUtilizadas" aria-expanded="false" aria-controls="collapseHerramientasUtilizadas">
                              3. Herramientas Utilizadas
                          </button>
                      </h2>
                      <div id="collapseHerramientasUtilizadas" class="accordion-collapse collapse" aria-labelledby="headingHerramientasUtilizadas" data-bs-parent="#accordionDocumentacion">
                          <div class="accordion-body">
                              <p>El desarrollo del proyecto se llevó a cabo utilizando las siguientes herramientas y tecnologías:</p>
                              <ul>
                                  <li>Laravel Framework: Utilizado como el framework de desarrollo principal para la construcción de la aplicación web.</li>
                                  <li>Bootstrap: Utilizado para el diseño y la maquetación responsiva del frontend.</li>
                                  <li>MySQL: Base de datos relacional utilizada para almacenar datos contables y financieros.</li>
                                  <!-- Agrega más herramientas utilizadas -->
                              </ul>
                          </div>
                      </div>
                  </div>
      
                  <!-- Sección de Planes de Trabajo -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingPlanesTrabajo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePlanesTrabajo" aria-expanded="false" aria-controls="collapsePlanesTrabajo">
                              4. Planes de Trabajo
                          </button>
                      </h2>
                      <div id="collapsePlanesTrabajo" class="accordion-collapse collapse" aria-labelledby="headingPlanesTrabajo" data-bs-parent="#accordionDocumentacion">
                        <div class="accordion-body">
                            <p class="text-justify">
                                El plan de trabajo se dividió en varias etapas, que incluyen:
                            </p>
                            <ul>
                                <li>Análisis de requisitos: Definición de los requisitos del sistema y el alcance del proyecto.</li>
                                <li>Diseño: Creación de prototipos y diseño de la interfaz de usuario.</li>
                                <li>Desarrollo: Implementación de la funcionalidad del sistema y pruebas unitarias.</li>
                                <li>Implementación: Puesta en marcha del sistema en un entorno de producción.</li>
                                <li>Mantenimiento: Actualizaciones y correcciones de errores según sea necesario.</li>
                            </ul>
                        </div>
                    </div>
                    
                  </div>
      
                  <!-- Sección de Informes de Progreso -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingInformesProgreso">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseInformesProgreso" aria-expanded="false" aria-controls="collapseInformesProgreso">
                              5. Informes de Progreso
                          </button>
                      </h2>
                      <div id="collapseInformesProgreso" class="accordion-collapse collapse" aria-labelledby="headingInformesProgreso" data-bs-parent="#accordionDocumentacion">
                        <div class="accordion-body">
                            <p class="text-justify">
                                Durante el desarrollo del proyecto, se generaron informes de progreso periódicos para mantener a todas las partes interesadas informadas sobre el estado del proyecto. Algunos de los elementos incluidos en estos informes son:
                            </p>
                            <h5>Avances Realizados:</h5>
                            <ul>
                                <li>Se completó el diseño de la interfaz de usuario para la página de inicio y el panel de control.</li>
                                <li>Se implementó la funcionalidad básica de registro de usuarios y gestión de permisos.</li>
                                <li>Se desarrolló el módulo de ingreso de transacciones contables básicas.</li>
                            </ul>
                            <h5>Problemas Encontrados:</h5>
                            <ul>
                                <li>Dificultades para integrar la base de datos existente de "Villa Las Acacias" con el sistema contable debido a diferencias en la estructura de datos.</li>
                                <li>Retraso en la adquisición de imágenes de alta calidad para la interfaz de usuario.</li>
                            </ul>
                            <h5>Soluciones Propuestas:</h5>
                            <ul>
                                <li>Se decidió realizar una migración parcial de datos para adaptar la estructura de la base de datos al sistema contable, lo que agilizará la integración.</li>
                                <li>Se está explorando la posibilidad de utilizar imágenes de stock temporalmente para la interfaz de usuario mientras se espera la entrega de las imágenes personalizadas.</li>
                            </ul>
                            <h5>Estimación de Tiempos para las Próximas Etapas:</h5>
                            <ul>
                                <li>Integración de la base de datos: Se espera completar la migración parcial y finalizar la integración en las próximas dos semanas.</li>
                                <li>Desarrollo de módulos adicionales (como informes financieros y gestión de usuarios): Se planifica iniciar el desarrollo la próxima semana y se estima que tomará aproximadamente un mes completarlo.</li>
                            </ul>
                        </div>
                    </div>
                    
                    
                  </div>
      
                 
                  <!-- Sección de Responsabilidades del Equipo -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingResponsabilidadesEquipo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseResponsabilidadesEquipo" aria-expanded="false" aria-controls="collapseResponsabilidadesEquipo">
                              6. Responsabilidades del Equipo
                          </button>
                      </h2>
                      <div id="collapseResponsabilidadesEquipo" class="accordion-collapse collapse" aria-labelledby="headingResponsabilidadesEquipo" data-bs-parent="#accordionDocumentacion">
                        <div class="accordion-body">
                            <p>Las responsabilidades del equipo se asignaron de la siguiente manera:</p>
                            <ul>
                                <li><strong>Desarrollo Backend:</strong> Lester Almendares y Lennin Avilez fue responsable de la implementación de la lógica de negocio, la interacción con la base de datos y la construcción de APIs.</li>
                                <li><strong>Desarrollo Frontend:</strong> Stephany Trejo y Laura Martinez  se encargó del diseño y desarrollo de la interfaz de usuario, asegurando una experiencia intuitiva y atractiva para los usuarios finales.</li>
                                <li><strong>Pruebas y Control de Calidad:</strong> José Rodríguez supervisó la ejecución de pruebas unitarias, pruebas de integración y pruebas de aceptación del usuario, garantizando la calidad del software entregado.</li>
                                <li><strong>Módulo de Contabilidad y Mantenimiento:</strong> Lester Almendares estuvo a cargo de desarrollar y mantener los módulos relacionados con la contabilidad y el mantenimiento del sistema, asegurando la precisión y confiabilidad de los datos financieros.</li>
                                <li><strong>Módulo de Inicio, Dashboard, Inicio de Sesión y Ayuda y Soporte:</strong> Lennin Avilez se centró en la creación de las vistas y funcionalidades relacionadas con la página de inicio, el panel de control, el proceso de inicio de sesión y las opciones de ayuda y soporte.</li>
                                <li><strong>Módulo de Seguridad e Informe Financiero:</strong> Laura Martínez trabajó en la implementación de medidas de seguridad robustas para proteger la información del sistema y en la generación de informes financieros detallados para análisis y toma de decisiones.</li>
                                <li><strong>Módulo de Administración:</strong> Stephany Trejo se encargó de desarrollar las funciones de administración del sistema, permitiendo la gestión eficiente de usuarios, roles y permisos, así como la configuración general del sistema.</li>
                                <!-- Agrega más responsabilidades según sea necesario -->
                            </ul>
                        </div>
                    </div>
                    
                  </div>
      
                  <!-- Sección de Documentación Legal y Regulatoria -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingDocumentacionLegal">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDocumentacionLegal" aria-expanded="false" aria-controls="collapseDocumentacionLegal">
                              7. Documentación Legal y Regulatoria
                          </button>
                      </h2>
                      <div id="collapseDocumentacionLegal" class="accordion-collapse collapse" aria-labelledby="headingDocumentacionLegal" data-bs-parent="#accordionDocumentacion">
                          <div class="accordion-body">
                              <p>Se adjunta la siguiente documentación legal y regulatoria relevante:</p>
                              <ul>
                                  <li>Acuerdo de Confidencialidad firmado por todos los miembros del equipo.</li>
                                  <li>Política de Privacidad y Protección de Datos del Sistema Contable en la Web.</li>
                                  <!-- Agrega más documentación legal según sea necesario -->
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      

      <div id="contactoSoporte" class="tab-pane fade">
        <!-- Contenido para "Contacto De Soporte" -->
        <div class="container-fluid">
            <h1 style="color: #007bff;">Universidad Nacional Autónoma de Honduras (UNAH)</h1>
            <p>Para obtener soporte técnico o asistencia relacionada con el proyecto "Sistema Contable Villas Las Acacias", por favor, contacta al equipo de trabajo de Digital Solution:</p>
            <ul style="list-style-type: none;">
                <li><strong>Digital Solution:</strong></li>
                <li>Teléfono: <span style="color: #007bff;">[Número de teléfono]</span></li>
                <li>Correo Electrónico: <span style="color: #007bff;">[Dirección de correo electrónico]</span></li>
                <li>Página Web: <a href="[URL de la página web]" style="color: #007bff; text-decoration: none;">[URL de la página web]</a></li>
            </ul>
            <p style="color: #6c757d;">© Todos los derechos reservados. Universidad Nacional Autónoma de Honduras (UNAH) - Digital Solution.</p>
        </div>
    </div>
    
    
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css">

    
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.4/js/dataTables.bootstrap5.js"></script>
@stop
