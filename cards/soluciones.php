<?php
$identificador = isset($_GET['tarjeta']) ? $_GET['tarjeta'] : '';
$descripcionAyuda = [];
$descripcionAyudaTitulo = [];

if ($identificador == 'ERP') {

    require('SolucionesDetail.php');
    $descripcionAyudaTitulo = ['Simplifica y optimiza operaciones', 'Automatiza tareas y aumenta la eficiencia', 'Fomenta la colaboración y la comunicación', 'Proporciona datos reales y relevantes', 'Permite personalizaciones según necesidades', 'Brinda información clave para tomar decisiones'];

    $descripcionAyuda = [
        'Nuestro sistema de ERP centraliza y simplifica la gestión de todos los aspectos clave de tu negocio, desde la planificación de recursos hasta la gestión de inventarios y ventas. Obtén un control integral y eficiente de tus procesos empresariales.',
        'Con nuestro sistema de ERP, podrás automatizar tareas repetitivas y liberar tiempo valioso.',
        'Nuestro ERP promueve la colaboración entre departamentos al centralizar los datos y compartir información en tiempo real.',
        'Reduce la duplicación de datos, mejora la comunicación interna y agiliza los flujos de trabajo para un mayor rendimiento en equipo.',
        'Adaptamos nuestro sistema de ERP a las particularidades de tu negocio. Con módulos adicionales y personalizables, puedes obtener funcionalidades específicas que se ajusten a tus requerimientos, ya sea control de inventario, gestión de proyectos o relacione con los clientes.',
        'Obtén informes y análisis detallados para evaluar el rendimiento de tu negocio. Accede a métricas clave, indicadores de rendimiento y estadísticas en tiempo real para tomar decisiones estratégicas basadas en datos confiables.'
    ];

    $preguntasFrecuentes = ['¿Cómo puedo personalizar el sistema de ERP para adaptarlo a las necesidades específicas de mi negocio?', '¿Cómo puedo garantizar la seguridad de mis datos en el sistema de ERP?', '¿Cómo puedo garantizar la seguridad de mis datos en el sistema de ERP?'];

    $respuestas = ['En Cleversoft, entendemos la importancia de la personalización. Nuestro sistema de ERP ofrece módulos adicionales y personalizables que te permiten ajustar el sistema según tus requisitos particulares. Ya sea que necesites funcionalidades específicas para el control de inventario, seguimiento de proyectos o gestión de relaciones con los clientes (CRM), trabajaremos contigo para configurar el sistema de ERP de manera que se adapte perfectamente a tu negocio.', 'La seguridad de tus datos es nuestra máxima prioridad. Nuestro sistema de ERP utiliza medidas de seguridad robustas para proteger tu información empresarial. Implementamos tecnologías de encriptación y protocolos de seguridad avanzados para garantizar la confidencialidad y la integridad de tus datos. Además, realizamos copias de seguridad periódicas para asegurar la disponibilidad y la recuperación de la información en caso de algún incidente.', 'Nos comprometemos a brindarte un sólido soporte técnico en cada etapa del proceso. Nuestro equipo de expertos estará disponible para responder tus preguntas, resolver problemas y proporcionarte la asistencia necesaria durante la implementación y el uso continuo del sistema de ERP. Además, ofrecemos capacitación detallada para tu equipo, asegurándonos de que puedas aprovechar al máximo todas las funcionalidades y beneficios que nuestro sistema de ERP tiene para ofrecer.'];

    $erp = new SolucionesDetail(
        '',
        'Sistema de gestión</br> de empresas',
        'Gestión optimizada para empresas: simplifica operaciones y potencia tu crecimiento con nuestro sistema de ERP',
        'Potencia tu negocio con Clever ERP',
        'Nuestro sistema de ERP es una solución integral diseñada para optimizar y simplificar la gestión de todos los aspectos clave de los negocios. </br>Se trata de una plataforma centralizada que integra y administra todos los procesos empresariales, abarcando desde la planificación de recursos hasta la gestión de inventarios, ventas, finanzas y más.
    </br></br>Ofrecemos una visión panorámica y en tiempo real de todas las operaciones comerciales, lo que te permitirá tomar decisiones más informadas y estratégicas.
    Contamos con procesos para automatizar tareas repetitivas y mejorar la eficiencia operativa en toda tu organización.</br> Esto se logra gracias a que todos los datos se almacenan en una base de datos
    centralizada y se comparten entre diferentes funciones y equipos, fomentando así una mejor colaboración entre departamentos.
    Con esto, se reduce la duplicación de datos, se mejora la comunicación interna y se agilizan los flujos de trabajo.
    </br></br>Además, ofrecemos módulos adicionales y personalizables para adaptarse a las necesidades específicas. Independientemente de si se requieren funcionalidades específicas para el control de inventario, seguimiento de proyectos, gestión de relaciones con los clientes (CRM) u otros aspectos empresariales, nuestro sistema de ERP puede configurarse según requisitos particulares.
    </br>Otra ventaja de nuestro ERP es la generación de informes y análisis detallados con el cual se puede obtener una comprensión profunda del rendimiento de negocio, accediendo a métricas clave, indicadores de rendimiento y estadísticas en tiempo real. De esta manera, se logra evaluar la rentabilidad, identificar áreas de mejora y tomar decisiones estratégicas basadas en datos confiables.',
        'https://www.instagram.com/p/ClrjoQkjW3K',
        'Nuestro equipo de especialistas en tecnología, arquitectura empresarial y transformación está aquí para potenciar negocios, utilizando la tecnología y la innovación como herramientas para la reinvención.',
        $descripcionAyudaTitulo,
        $descripcionAyuda,
        $preguntasFrecuentes,
        $respuestas
    );
} else if ($identificador == 'CLUB') {
    require('SolucionesDetail.php');
    $descripcionAyudaTitulo = ['Simplifica y optimiza la gestión del club', 'Automatiza tareas y mejora la eficiencia', 'Fomenta la colaboración y la comunicación', 'Proporciona datos precisos y relevantes', 'Personalización según las necesidades del club', 'Brinda información clave para la toma de decisiones'];
    $descripcionAyuda = ['Nuestro sistema de ERP centraliza y simplifica la gestión de todos los aspectos clave de tu club, desde la administración de socios hasta la programación de eventos deportivos. Permite obtener un control integral y eficiente de los procesos deportivos y administrativos.', 'Nuestro sistema de ERP permite automatizar tareas repetitivas y ahorrar tiempo valioso. Simplifica la gestión de inscripciones, reservas de instalaciones, control de acceso y más, permitiéndote enfocarte en el crecimiento y desarrollo del club.', 'Nuestro ERP promueve la colaboración entre diferentes áreas del club al centralizar los datos y facilitar la comunicación en tiempo real. Mejora la coordinación entre equipos técnicos, administrativos y socios para lograr un funcionamiento más eficiente.', 'Reduce la duplicación de datos, mejora la comunicación interna y agiliza los flujos de trabajo para un mejor rendimiento en equipo. Accede a información actualizada sobre asistencia a eventos, rendimiento deportivo, cuotas y finanzas, permitiendo tomar decisiones informadas y estratégicas.', 'Adaptamos nuestro sistema de ERP a las particularidades del club. Desde la gestión de canchas y horarios, hasta la administración de academias y eventos deportivos, obtén funcionalidades específicas que se ajusten a los requerimientos y necesidades.', 'Obtén informes y análisis detallados para evaluar el rendimiento de tu club. Accede a métricas clave, indicadores de desempeño y estadísticas en tiempo real, permitiéndote tomar decisiones estratégicas basadas en datos confiables y relevantes.'];

    $preguntasFrecuentes = ['¿Cómo puede nuestro club de fútbol beneficiarse de CleverClub en la gestión de entradas y eventos?', '¿Cómo puede nuestro club de fútbol beneficiarse de CleverClub en la gestión de entradas y eventos?', '¿Cómo puede nuestro club de fútbol beneficiarse de CleverClub en la gestión de entradas y eventos?'];
    $respuestas = ['CleverClub ofrece una plataforma completa para la gestión de entradas y eventos en tu club. Podrás agilizar la venta de entradas, controlar el acceso a los partidos y eventos, generar informes detallados y optimizar la experiencia de los aficionados. Nuestro sistema te ayudará a mejorar la organización de eventos y maximizar los ingresos.', 'CleverClub simplifica la gestión de la cuota de socios y abonados. Podrás mantener un registro actualizado de los socios, gestionar las cuotas, enviar recordatorios de pago y generar informes financieros detallados. El sistema también ofrece funciones de comunicación personalizada para mantener una relación cercana con tus socios y fomentar la participación en el club.', 'Nos comprometemos a brindar un sólido soporte y asistencia técnica. Nuestro equipo estará disponible para responder tus preguntas, resolver problemas y proporcionarte orientación en cada etapa de la implementación y el uso del sistema. Además, ofrecemos capacitación detallada para garantizar que aproveches al máximo todas las funcionalidades de CleverClub.'];

    $club = new SolucionesDetail(
        'Clever Club',
        'Sistema de gestión </br> de clubes deportivos',
        'Gestión optimizada para clubes deportivo: simplifica operaciones y potencia tu crecimiento con nuestro sistema de ERP especializado.',
        'Tu club hacia la victoria con Clever Club',
        'Nuestro ERP para clubes deportivos es una solución integral diseñada para optimizar y simplificar la gestión de todas las áreas clave del club. Es una plataforma centralizada que integra y administra procesos deportivos y administrativos, desde la planificación de actividades y gestión de instalaciones hasta el control de cuotas, eventos y finanzas.</br></br>Ofrecemos una visión panorámica y en tiempo real de todas las operaciones deportivas y administrativas, lo que te permite tomar decisiones informadas y estratégicas para el crecimiento de tu club. Además, nuestra solución automatiza tareas repetitivas, mejora la eficiencia operativa y fomenta la colaboración entre equipos técnicos, administrativos y socios.</br></br>Con módulos adicionales y personalizables, adaptamos nuestro ERP a las necesidades específicas del club. Ya sea el control de canchas, gestión de productos o seguimiento de eventos, nuestro ERP puede configurarse según tus requisitos particulares. </br></br>Además, proporcionamos informes y análisis detallados para evaluar el rendimiento de tu club. Accede a métricas clave, indicadores de desempeño y estadísticas en tiempo real, lo que te permite evaluar la rentabilidad, identificar áreas de mejora y tomar decisiones estratégicas basadas en datos confiables y relevantes.</br></br>Nuestro ERP para clubes deportivos es la herramienta perfecta para optimizar la gestión, impulsar el crecimiento y llevar tu club al siguiente nivel.',
        'https://www.instagram.com/p/Cn7kIX3OwjT',
        'En Clever Club, nuestro equipo de especialistas en tecnología y gestión deportiva está comprometido en potenciar tu club, brindándote soluciones que simplifican y optimizan tus operaciones.',
        $descripcionAyudaTitulo,
        $descripcionAyuda,
        $preguntasFrecuentes,
        $respuestas
    );
} else if ($identificador == 'SCA') {
    require('SolucionesDetail.php');
    $descripcionAyudaTitulo = [
        'Simplifica y optimiza el control de accesos', 'Automatiza tareas y aumenta la eficiencia', 'Mejora la seguridad y el monitoreo', 'Proporciona datos precisos y en tiempo real', 'Personalización según tus necesidades', 'Brinda una experiencia fluida y segura para los usuarios'
    ];

    $descripcionAyuda = [
        'Nuestro sistema de SCA centraliza y simplifica el control de accesos, permitiéndote gestionar de manera eficiente la entrada y salida de personas a través de molinetes con credenciales y reconocimiento facial. Simplifica la operación y optimiza la seguridad en tu institución.',
        'Con nuestro sistema de SCA, podrás automatizar tareas repetitivas relacionadas con el control de accesos, liberando tiempo valioso para tu personal de seguridad y facilitando la experiencia de los usuarios.',
        'Mejora la seguridad y el monitoreo de tu institución con nuestro sistema de SCA. Obtén un control preciso y en tiempo real de quién ingresa y sale de tus instalaciones, y realiza un seguimiento detallado de los registros de acceso.',
        'Nuestro sistema de SCA te proporciona datos precisos y en tiempo real sobre el flujo de personas en tu institución. Accede a información actualizada que te permita tomar decisiones estratégicas basadas en datos confiables.',
        'Adaptamos nuestro sistema de SCA a las necesidades específicas de tu institución. Con opciones de personalización, puedes configurar el sistema según tus requisitos particulares, ya sea la integración de otros dispositivos de seguridad o la implementación de políticas de acceso específicas.',
        'Brindamos una experiencia fluida y segura para los usuarios con nuestro sistema de SCA. Ya sea a través de molinetes con credenciales o reconocimiento facial, ofrecemos una forma eficiente y confiable de gestionar el acceso a tus instalaciones.'
    ];

    $preguntasFrecuentes = [
        '¿Es complicada la configuración del sistema de control de accesos Clever SCA con otros dispositivos de seguridad?',
        '¿Cómo garantizamos la privacidad de los datos biométricos utilizados en el reconocimiento facial?',
        '¿Qué ventajas ofrece el sistema de SCA en comparación con otros métodos de control de accesos?'
    ];

    $respuestas = [
        'Entendemos que la configuración del sistema de control de accesos Clever SCA puede ser un proceso complejo. Sin embargo, nuestro equipo de expertos en implementación está dedicado a brindarte un soporte completo durante todo el proceso.</br> Trabajaremos estrechamente contigo para asegurarnos de que la configuración se realice de manera eficiente y sin problemas. </br>Además, proporcionaremos una documentación detallada y recursos de capacitación para garantizar que puedas aprovechar al máximo todas las funcionalidades del sistema de control de accesos Clever SCA.',
        'La privacidad de los datos biométricos es una prioridad para nosotros. Implementamos medidas de seguridad robustas para garantizar la protección de la información personal de los usuarios. Los datos biométricos se almacenan de manera segura y se utilizan únicamente para fines de autenticación en el sistema de SCA.',
        'Nuestro sistema de SCA ofrece varias ventajas en comparación con otros métodos de control de accesos. Proporciona un mayor nivel de seguridad y precisión mediante el uso de tecnología biométrica, como el reconocimiento facial. Además, automatiza el proceso de control de accesos, lo que ahorra tiempo y mejora la eficiencia en tu institución.'
    ];

    $sca = new SolucionesDetail(
        '',
        'Sistema de control</br>de accesos',
        'Gestión optimizada para instituciones: simplifica el control de accesos y mejora la seguridad con nuestro sistema de SCA',
        'Potencia el control de accesos con Clever SCA',
        'Nuestro sistema de SCA es una solución integral diseñada para simplificar y optimizar el control de accesos en tu institución. Desde molinetes con credenciales hasta reconocimiento facial, ofrecemos una forma eficiente y segura de gestionar quién ingresa y sale de tus instalaciones.
        </br></br>Clever SCA permite una gestión de manera eficiente y centralizada quién tiene acceso a tus instalaciones. Con nuestro sistema, podrás establecer y mantener un riguroso control sobre quién puede ingresar y salir de áreas restringidas.
        </br></br> Nuestros molinetes con credenciales permiten implementar una forma segura y confiable de verificar la identidad de las personas que ingresan a las instalaciones. Contamos con la integración a nuestra base de datos centralizada lo que permite una gestión sencilla de las credenciales, tanto para revocar o modificar los permisos de acceso según sea necesario.
        </br></br>También contamos con tecnología de reconocimiento facial. Mediante algoritmos avanzados, nuestro sistema puede autenticar a las personas a través de sus rasgos faciales únicos. Esto elimina la necesidad de credenciales físicas y proporciona una experiencia de acceso más fluida. Además, el reconocimiento facial ofrece un nivel adicional de seguridad al prevenir el uso de credenciales perdidas, robadas o duplicadas.
        </br></br> Nuestro equipo de expertos en tecnología y seguridad está presente en cada paso del proceso, desde la instalación inicial hasta el soporte continuo. Nos enorgullece ofrecer soluciones confiables y efectivas que brindan tranquilidad y protección las instituciones.',
        'https://www.instagram.com/p/CnXXC9qOZmg',
        'Nuestro equipo de especialistas en tecnología y seguridad está presente para ayudarte a potenciar la gestión de accesos en tu institución. Utilizamos tecnología innovadora y seguimos los más altos estándares de seguridad para brindarte soluciones confiables y efectivas.',
        $descripcionAyudaTitulo,
        $descripcionAyuda,
        $preguntasFrecuentes,
        $respuestas
    );
} else if ($identificador == 'CRM') {
    require('SolucionesDetail.php');
    $descripcionAyudaTitulo = [
        'Optimiza la gestión de relaciones con los clientes',
        'Automatiza tareas y mejora la eficiencia',
        'Ofrece un seguimiento detallado y en tiempo real',
        'Personalización para satisfacer tus necesidades',
        'Proporciona una experiencia fluida y satisfactoria',
        'Mejora la toma de decisiones basadas en datos'
    ];

    $descripcionAyuda = [
        'Nuestro sistema de gestión de relaciones con los clientes (CRM) optimiza y centraliza la gestión de tus relaciones con los clientes. Permite administrar de manera eficiente la información de contacto, historial de interacciones y seguimiento de oportunidades de negocio.',
        'Nuestro sistema de CRM, permite automatizar tareas repetitivas, como el envío de correos electrónicos y la programación de recordatorios, lo que te permitirá ahorrar tiempo y aumentar la eficiencia en la gestión de las relaciones con los clientes.',
        'Permite obtener un seguimiento detallado y en tiempo real de las interacciones con tus clientes. Nuestro sistema registra y almacena de manera centralizada toda la información relevante, como llamadas, correos electrónicos, reuniones y transacciones, lo que te permite acceder a ella fácilmente y tomar decisiones informadas.',
        'Adaptamos nuestro sistema para satisfacer tus necesidades específicas. Con opciones de personalización, puedes configurar campos personalizados, flujos de trabajo y paneles de control según tus requisitos particulares, lo que te brinda flexibilidad en la gestión.',
        'Proporcionamos una experiencia fluida y satisfactoria tanto para el equipo como para los clientes. Nuestro sistema de CRM ofrece una interfaz intuitiva y fácil de usar, lo que facilita la navegación y el acceso a la información relevante. Además, te ayudamos a establecer procesos eficientes para garantizar una experiencia positiva para los clientes.',
        'Nuestro sistema permite informes y análisis detallados sobre clientes, oportunidades de venta, rendimiento del equipo y más. Estos datos te permitirán identificar tendencias, tomar decisiones estratégicas y mejorar tus resultados comerciales.'
    ];

    $preguntasFrecuentes = [
        '¿Cómo garantizamos la seguridad y confidencialidad de los datos de tus clientes?',
        '¿Cuáles son las ventajas de utilizar un sistema de CRM en comparación con métodos tradicionales de gestión de clientes?',
        '¿Cómo puede nuestro sistema de CRM mejorar tus estrategias de marketing y ventas?'
    ];

    $respuestas = [
        'La seguridad y confidencialidad de los datos de tus clientes son nuestra máxima prioridad. Implementamos medidas de seguridad avanzadas para proteger la información confidencial y cumplimos con los estándares de privacidad y regulaciones vigentes. Tus datos se almacenan de forma segura y se accede a ellos únicamente con permisos adecuados.',
        'Utilizar un sistema de CRM ofrece varias ventajas en comparación con los métodos tradicionales de gestión de clientes. Proporciona una visión completa de tus clientes y un seguimiento detallado de las interacciones, lo que te ayuda a personalizar tus mensajes y mejorar la calidad de tus relaciones comerciales. Además, la automatización de tareas y la disponibilidad de informes en tiempo real te permiten ahorrar tiempo y tomar decisiones más informadas.',
        'Al integrar nuestro sistema de CRM con tus herramientas de marketing y ventas, podrás obtener una visión completa y en tiempo real de tus clientes y prospectos. Esto te permitirá segmentar y personalizar tus campañas de marketing, enviar comunicaciones relevantes y realizar un seguimiento efectivo de las oportunidades de venta. Además, podrás medir el rendimiento de tus estrategias y tomar decisiones basadas en datos precisos, impulsando así el crecimiento de tu negocio.'
    ];

    $crm = new SolucionesDetail(
        '',
        'Sistema de relaciones</br> con clientes',
        'Optimiza la gestión de tus relaciones con los clientes con Clever CRM',
        'Potencia tu relación con los clientes con nuestro CRM',
        'Nuestro sistema de CRM permite simplificar la gestión de relaciones con los clientes, centralizando la información relevante en una sola plataforma. Además, permite obtener una visión completa y en tiempo real de tus clientes, lo que te facilita la toma de decisiones más informadas y personalizadas.
        </br> </br>Este sistema brinda la capacidad de automatizar tareas repetitivas. Además, permite mejorar la eficiencia en tus procesos comerciales, ya que brinda un acceso rápido a la información de los clientes, historial de interacciones y seguimiento de ventas.
        </br> </br>CLEVER CRM proporciona la posibilidad de personalizar la comunicación con los clientes, ofreciéndoles experiencias únicas y adaptadas a sus necesidades y preferencias. Asimismo, permite analizar datos y obtener informes detallados sobre el rendimiento de tus estrategias de ventas, lo que te ayuda a optimizar tus acciones y maximizar tus resultados.
        </br> </br>En cuanto a la seguridad, nuestro enfoque se basa en utilizar tecnología innovadora y mantenernos actualizados con las últimas tendencias en CRM. Esto nos permite ofrecer soluciones confiables y efectivas en la gestión de relaciones con los clientes, al mismo tiempo que implementamos las medidas de seguridad más avanzadas para proteger la confidencialidad y privacidad de los datos de los clientes.
        </br> </br>Desde la instalación inicial hasta el soporte continuo, nuestro equipo de expertos en tecnología y seguridad estará a disposición. Estamos comprometidos en brindar tranquilidad y protección, ofreciéndo soluciones confiables y efectivas en la gestión de relaciones con los clientes.',
        'https://www.instagram.com/p/Cg4wl5euk6G',
        'Nuestro equipo de especialistas en tecnología y CRM está presente para ayudarte a potenciar la gestión de accesos en tu institución. Utilizamos tecnología innovadora y seguimos los más altos estándares de seguridad para brindarte soluciones confiables y efectivas.',
        $descripcionAyudaTitulo,
        $descripcionAyuda,
        $preguntasFrecuentes,
        $respuestas
    );
} else if ($identificador == 'Consultoria') {
    require('SolucionesDetail.php');

    $descripcionAyudaTitulo = [
        'Optimiza la gestión de sistemas',
        'Automatiza tareas y mejora la eficiencia',
        'Ofrece un seguimiento detallado y en tiempo real',
        'Personalización para satisfacer tus necesidades',
        'Proporciona una experiencia fluida y satisfactoria',
        'Mejora la toma de decisiones basadas en datos'
    ];

    $descripcionAyuda = [
        'Nuestros servicios de consultoría en sistemas te ayudarán a optimizar la gestión de tus sistemas empresariales. Evaluamos tus necesidades y te proporcionamos soluciones personalizadas para mejorar la eficiencia y el rendimiento de tus sistemas.',
        'Automatizamos tareas repetitivas y simplificamos procesos para ahorrar tiempo y recursos. Nuestros consultores identificarán oportunidades para automatizar tareas y te brindarán recomendaciones para mejorar la eficiencia de tus sistemas.',
        'Con nuestro enfoque de seguimiento detallado y en tiempo real, podrás tener un mayor control y visibilidad de tus sistemas. Implementamos herramientas de monitoreo y análisis para ayudarte a identificar y solucionar problemas rápidamente, minimizando el impacto en tu negocio.',
        'Adaptamos las soluciones a tus necesidades específicas. Nuestros consultores trabajarán en estrecha colaboración contigo para comprender tus requisitos y desarrollar soluciones personalizadas que se ajusten perfectamente a tu entorno empresarial.',
        'Nos aseguramos de que la experiencia de uso de tus sistemas sea fluida y satisfactoria. Optimizamos la interfaz de usuario y la navegación para que tus empleados puedan acceder fácilmente a la información y realizar sus tareas de manera eficiente.',
        'Basamos nuestras recomendaciones en datos y análisis. Utilizamos herramientas y técnicas avanzadas para recopilar y analizar datos relevantes de tus sistemas, lo que te permite tomar decisiones informadas y estratégicas para impulsar el crecimiento de tu empresa.'
    ];

    $preguntasFrecuentes = [
        '¿Cómo puedo beneficiarme de la consultoría en sistemas?',
        '¿Cuánto tiempo llevará implementar las soluciones propuestas?',
        '¿Cuál es el costo de los servicios de consultoría en sistemas?'
    ];

    $respuestas = [
        'Nuestra consultoría en sistemas te brinda beneficios como la optimización de tus procesos, la mejora de la eficiencia y el rendimiento de tus sistemas, y la maximización del retorno de inversión. Analizamos tu infraestructura y tus necesidades para proporcionarte soluciones personalizadas que impulsen tu competitividad en el mercado.',
        'La duración de la implementación de las soluciones propuestas puede variar dependiendo de la complejidad de tus sistemas y los cambios requeridos. Nuestros consultores trabajarán en estrecha colaboración contigo para establecer un cronograma y asegurarse de que se cumplan los plazos acordados.',
        'El costo de nuestros servicios de consultoría en sistemas dependerá de varios factores, como el alcance del proyecto, la complejidad de tus sistemas y las necesidades específicas de tu empresa. Nuestros consultores elaborarán un presupuesto detallado y transparente que refleje los servicios y el valor que recibirás.'
    ];

    $consultoriaSistemas = new SolucionesDetail(
        '',
        'Consultoría de </br>sistemas',
        'Optimiza tus sistemas empresariales con nuestra consultoría especializada',
        'Impulsa la eficiencia y rendimiento de tus sistemas con nuestra consultoría',
        'Nuestra consultoría de sistemas está diseñada para ayudarte a optimizar tus procesos, mejorar la gestión de tus sistemas y maximizar el rendimiento de tu infraestructura tecnológica.
        </br> </br>Nuestro enfoque se basa en ofrecer soluciones personalizadas y adaptadas a las necesidades específicas de tu empresa. 
        Desarrollamos estrategias y soluciones a medida que abordan tus necesidades específicas. Nuestro objetivo es ayudarte a aprovechar al máximo tus sistemas empresariales, maximizando la eficiencia, la productividad y la rentabilidad de tu empresa.
        </br> </br>  Nuestros consultores no solo se enfocan en la parte técnica, sino también en los aspectos empresariales y operativos de tus sistemas. Trabajamos en conjunto con tus equipos internos para garantizar una implementación exitosa y una adopción fluida de las soluciones propuestas. Además, brindamos capacitación y soporte continuo para asegurarnos de que puedas sacar el máximo provecho de tus sistemas optimizados.
        </br> </br> Estamos comprometidos con tu éxito y nos esforzamos por ofrecerte soluciones innovadoras y efectivas que impulsen tu negocio hacia adelante.
        No importa el tamaño ni la complejidad de tus sistemas empresariales, nuestro equipo de consultores está listo para enfrentar cualquier desafío. Trabajaremos contigo en cada etapa del proceso, desde la evaluación inicial y el diseño de la solución hasta la implementación y el seguimiento continuo.',
        'https://www.instagram.com/p/Cg4wl5euk6G',
        'Nuestro equipo de expertos en sistemas y consultores tecnológicos está aquí para ayudarte a identificar oportunidades de mejora y desarrollar soluciones que impulsen tu negocio.',
        $descripcionAyudaTitulo,
        $descripcionAyuda,
        $preguntasFrecuentes,
        $respuestas
    );
} else if ($identificador == 'Implementacion') {
    require('SolucionesDetail.php');

    $descripcionAyudaTitulo = [
        'Optimiza la gestión de sistemas',
        'Automatiza tareas y mejora la eficiencia',
        'Ofrece un seguimiento detallado y en tiempo real',
        'Personalización para satisfacer tus necesidades',
        'Proporciona una experiencia fluida y satisfactoria',
        'Mejora la toma de decisiones basadas en datos'
    ];

    $descripcionAyuda = [
        'Nuestros servicios de implementaciones te ayudarán a optimizar la gestión de tus sistemas empresariales. Evaluamos tus necesidades y te proporcionamos soluciones personalizadas para mejorar la eficiencia y el rendimiento de tus sistemas.',
        'Automatizamos tareas repetitivas y simplificamos procesos para ahorrar tiempo y recursos. Nuestros consultores identificarán oportunidades para automatizar tareas y te brindarán recomendaciones para mejorar la eficiencia de tus sistemas.',
        'Con nuestro enfoque de seguimiento detallado y en tiempo real, podrás tener un mayor control y visibilidad de tus sistemas. Implementamos herramientas de monitoreo y análisis para ayudarte a identificar y solucionar problemas rápidamente, minimizando el impacto en tu negocio.',
        'Adaptamos las soluciones a tus necesidades específicas. Nuestros consultores trabajarán en estrecha colaboración contigo para comprender tus requisitos y desarrollar soluciones personalizadas que se ajusten perfectamente a tu entorno empresarial.',
        'Nos aseguramos de que la experiencia de uso de tus sistemas sea fluida y satisfactoria. Optimizamos la interfaz de usuario y la navegación para que tus empleados puedan acceder fácilmente a la información y realizar sus tareas de manera eficiente.',
        'Basamos nuestras recomendaciones en datos y análisis. Utilizamos herramientas y técnicas avanzadas para recopilar y analizar datos relevantes de tus sistemas, lo que te permite tomar decisiones informadas y estratégicas para impulsar el crecimiento de tu empresa.'
    ];

    $preguntasFrecuentes = [
        '¿Cómo puedo beneficiarme de los servicios de implementaciones?',
        '¿Cuánto tiempo llevará implementar las soluciones propuestas?',
        '¿Cuál es el costo de las implementaciones de sistemas?'
    ];

    $respuestas = [
        'Nuestros servicios de implementaciones te brindan beneficios como la optimización de tus procesos, la mejora de la eficiencia y el rendimiento de tus sistemas, y la maximización del retorno de inversión. Analizamos tu infraestructura y tus necesidades para proporcionarte soluciones personalizadas que impulsen tu competitividad en el mercado.',
        'La duración de la implementación de las soluciones propuestas puede variar dependiendo de la complejidad de tus sistemas y los cambios requeridos. Nuestros consultores trabajarán en estrecha colaboración contigo para establecer un cronograma y asegurarse de que se cumplan los plazos acordados.',
        'El costo de nuestras implementaciones de sistemas dependerá de varios factores, como el alcance del proyecto, la complejidad de tus sistemas y las necesidades específicas de tu empresa. Nuestros consultores elaborarán un presupuesto detallado y transparente que refleje los servicios y el valor que recibirás.'
    ];

    $implementaciones = new SolucionesDetail(
        '',
        'Implementacion de </br> Software',
        'Impulsa tus sistemas empresariales con nuestros servicios de implementación',
        'Optimiza la implementación y parametrización de CleverSoft ® en tu empresa',
        'El éxito de la puesta en marcha de CleverSoft ® en tu empresa depende de varios factores clave, y uno de los más importantes es la implementación y parametrización adecuada del sistema. Como los propios desarrolladores de CleverSoft ®, contamos con un conocimiento profundo y especializado para asegurar una implementación exitosa, adaptando el sistema a las necesidades específicas de tu empresa.
        </br> </br> Nuestra experiencia en el desarrollo de CleverSoft ® nos ha proporcionado una comprensión profunda de su funcionamiento interno y su flexibilidad para adaptarse a diferentes entornos empresariales. Al llevar a cabo la implementación y parametrización, nos aseguramos de que cada aspecto del sistema se configure y ajuste de acuerdo con tus requisitos y procesos empresariales.
        </br> </br> Durante la implementación, nos encargamos de gestionar todos los aspectos técnicos y operativos para garantizar una transición suave y exitosa. Configuramos el sistema de acuerdo con tus requisitos, importamos datos existentes y aseguramos la integración con otros sistemas y aplicaciones empresariales que puedas tener.
        Además, brindamos capacitación y soporte continuo para garantizar que tu equipo esté preparado para utilizar eficientemente el sistema.
        </br> </br> Entendemos que cada empresa es única y tiene requisitos específicos. Por lo tanto, nos comprometemos a adaptar la operatoria del sistema CleverSoft® a tu empresa, maximizando su potencial y asegurando que se ajuste perfectamente a tus procesos y flujos de trabajo.',
        'https://www.instagram.com/p/Cg4wl5euk6G',
        ' Nuestro equipo de expertos en implementaciones y consultores tecnológicos está aquí para ayudarte a llevar a cabo una implementación exitosa y adaptada a tus necesidades.',
        $descripcionAyudaTitulo,
        $descripcionAyuda,
        $preguntasFrecuentes,
        $respuestas
    );
} else if ($identificador == 'Tercearizacion') {
    require('SolucionesDetail.php');

    $descripcionAyudaTituloTercearizacion = [
        'Optimiza la gestión de sistemas de información',
        'Reduce costos y mejora la eficiencia',
        'Accede a expertos especializados en sistemas',
        'Enfoque estratégico para el crecimiento empresarial',
        'Flexibilidad y escalabilidad para adaptarse a tus necesidades',
        'Seguridad y confidencialidad de tus datos'
    ];

    $descripcionAyudaTercearizacion = [
        'Nuestros servicios de tercerización te permiten optimizar la gestión de tus sistemas de información empresariales. Contamos con expertos altamente capacitados en el área de sistemas que se encargarán de mantener y administrar tu infraestructura tecnológica de manera eficiente.',
        'Al tercerizar tu departamento de sistemas, puedes reducir costos significativamente. Evitas los gastos asociados con el mantenimiento de personal interno, como salarios, beneficios y capacitación. Además, al contar con un equipo externo de especialistas en sistemas, puedes aprovechar su experiencia y conocimientos actualizados para mejorar la eficiencia operativa de tu empresa.',
        'Nuestro equipo de expertos en sistemas está compuesto por profesionales altamente calificados y con experiencia en diversas áreas. Al tercerizar tu departamento de sistemas, tendrás acceso a un grupo de expertos especializados en diferentes tecnologías y herramientas. Esto te permite contar con un conjunto amplio de conocimientos y habilidades para satisfacer las necesidades específicas de tu empresa.',
        'Al tercerizar tu departamento de sistemas, puedes adoptar un enfoque estratégico para el crecimiento empresarial. Nuestro equipo de consultores trabajará contigo para desarrollar políticas y estrategias de sistemas que impulsen la innovación y la competitividad en el mercado. Te ayudaremos a alinear tus sistemas de información con tus objetivos empresariales y a aprovechar al máximo las oportunidades tecnológicas.',
        'Nuestros servicios de tercerización de sistemas te brindan flexibilidad y escalabilidad para adaptarse a las necesidades cambiantes de tu empresa. Ya sea que necesites expandir tus operaciones, implementar nuevas tecnologías o realizar ajustes en tus sistemas existentes, nuestro equipo estará listo para adaptarse y proporcionar soluciones ágiles y eficientes.',
        'La seguridad y confidencialidad de tus datos son de suma importancia para nosotros. Al tercerizar tu departamento de sistemas, implementamos medidas de seguridad sólidas para proteger tus datos empresariales. Utilizamos las mejores prácticas en seguridad de la información y cumplimos con los estándares y regulaciones relevantes para garantizar la confidencialidad, integridad y disponibilidad de tus datos.'
    ];

    $preguntasFrecuentesTercearizacion = [
        '¿Cuáles son los beneficios de tercerizar mi departamento de sistemas?',
        '¿Cómo puedo confiar en la seguridad de mis datos al tercerizar?',
        '¿Cuál es el costo de los servicios de tercerización de sistemas?'
    ];

    $respuestasTercearizacion = [
        'La tercerización de tu departamento de sistemas te brinda beneficios como la optimización de la gestión de sistemas de información, la reducción de costos y la mejora de la eficiencia operativa. Nuestro equipo de expertos se encargará de mantener y administrar tu infraestructura tecnológica, permitiéndote enfocarte en tu negocio principal.',
        'La seguridad de tus datos es nuestra prioridad. Implementamos medidas de seguridad robustas para proteger tus datos empresariales y cumplimos con los estándares y regulaciones relevantes. Nuestro equipo sigue las mejores prácticas en seguridad de la información para garantizar la confidencialidad, integridad y disponibilidad de tus datos.',
        'El costo de nuestros servicios de tercerización de sistemas dependerá de diversos factores, como el tamaño de tu empresa, la complejidad de tus sistemas y las necesidades específicas de tu negocio. Nuestros consultores te proporcionarán un presupuesto detallado y transparente que refleje los servicios y el valor que recibirás al tercerizar tu departamento de sistemas.'
    ];

    $tercearizacion = new SolucionesDetail(
        '',
        'Tercerización de </br> Sistemas',
        'Optimiza tu gestión de sistemas mediante la tercerización',
        'Reduce costos y mejora la eficiencia operativa de tu empresa',
        'Hoy en día, las empresas se encuentran cada vez más dependientes de los sistemas de información para llevar a cabo sus operaciones diarias de manera eficiente y efectiva. Sin embargo, mantener un departamento de sistemas interno puede resultar costoso y requerir una constante actualización del personal en un entorno tecnológico en constante evolución. Es por eso que nuestros servicios de tercerización de sistemas se presentan como una solución estratégica para optimizar tus recursos y potenciar el rendimiento de tu empresa.
        </br> </br>Al optar por la tercerización, puedes externalizar completamente tu departamento de sistemas, lo que te permite enfocarte en tu negocio principal mientras nosotros nos encargamos de todas las tareas relacionadas con la gestión y mantenimiento de tus sistemas de información.
        Además, al tercerizar tu departamento de sistemas, tienes acceso a un equipo de expertos altamente especializados en diferentes áreas de la tecnología. Nuestros profesionales cuentan con amplios conocimientos en diversas tecnologías, herramientas y metodologías, lo que nos permite brindarte soluciones personalizadas y adaptadas a tus necesidades específicas.
        </br> </br>Entendemos que la seguridad y confidencialidad de tus datos son de suma importancia. Al tercerizar tu departamento de sistemas, implementamos medidas de seguridad sólidas para proteger tus datos empresariales. Utilizamos las mejores prácticas en seguridad de la información y cumplimos con los estándares y regulaciones relevantes para garantizar la confidencialidad, integridad y disponibilidad de tus datos.',
        'https://www.instagram.com/p/Cg4wl5euk6G',
        'Nuestro equipo de expertos en sistemas está aquí para brindarte soluciones personalizadas y optimizar la gestión de tus sistemas de información.',
        $descripcionAyudaTituloTercearizacion,
        $descripcionAyudaTercearizacion,
        $preguntasFrecuentesTercearizacion,
        $respuestasTercearizacion
    );
} else if ($identificador == 'Desarrollo') {
    require('SolucionesDetail.php');

    $descripcionAyudaTitulo = [
        'Adaptación a los requerimientos específicos de tu negocio',
        'Utilización de las últimas tecnologías disponibles',
        'Cumplimiento de normas de análisis y programación',
        'Personalización para satisfacer tus necesidades',
        'Apoyo en empresas dinámicas y de rápido crecimiento',
        'Optimización de procesos y rendimiento'
    ];

    $descripcionAyuda = [
        'El desarrollo de aplicaciones a medida surge como respuesta a la necesidad de las empresas de adaptarse rápidamente a los requerimientos específicos del negocio en un contexto dinámico. Nosotros nos encargamos de diseñar y desarrollar soluciones de software que contemplen la forma de trabajo propia de tu empresa y respondan a las características inherentes a tu actividad.',
        'En nuestro enfoque de desarrollo de aplicaciones a medida, utilizamos las últimas tecnologías disponibles en herramientas de software y técnicas de desarrollo. Esto nos permite ofrecerte soluciones innovadoras y eficientes que se ajusten perfectamente a tus necesidades y te brinden ventajas competitivas en el mercado.',
        'Nuestro equipo de expertos sigue estrictas normas de análisis y programación durante todo el proceso de desarrollo. Nos aseguramos de realizar un análisis exhaustivo de tus requerimientos, establecer una arquitectura sólida y utilizar las mejores prácticas en codificación para garantizar la calidad y confiabilidad de las aplicaciones que desarrollamos.',
        'Nos comprometemos a personalizar nuestras soluciones para satisfacer tus necesidades específicas. Trabajaremos en estrecha colaboración contigo para comprender tus requisitos y diseñar una aplicación a medida que se ajuste perfectamente a tu entorno empresarial y a tus flujos de trabajo.',
        'Entendemos que las empresas dinámicas y de rápido crecimiento necesitan soluciones ágiles y flexibles. Nuestro enfoque de desarrollo de aplicaciones a medida está diseñado para brindarte el apoyo necesario en este tipo de entornos, permitiéndote adaptarte rápidamente a los cambios y escalar tus sistemas de manera eficiente.',
        'Uno de los principales objetivos del desarrollo de aplicaciones a medida es optimizar los procesos y el rendimiento de tu empresa. Nuestras soluciones están diseñadas para automatizar tareas, mejorar la eficiencia operativa y ayudarte a aprovechar al máximo tus recursos, lo que te permite ahorrar tiempo y costos en tu operación diaria.'
    ];

    $preguntasFrecuentes = [
        '¿Cómo beneficia el desarrollo de aplicaciones a medida a mi empresa?',
        '¿Cuánto tiempo lleva desarrollar una aplicación a medida?',
        '¿Cuáles son los costos asociados al desarrollo de aplicaciones a medida?'
    ];

    $respuestas = [
        'El desarrollo de aplicaciones a medida beneficia a tu empresa al adaptar las soluciones de software a los requerimientos específicos de tu negocio. Esto te permite contar con una aplicación que se ajusta perfectamente a tus flujos de trabajo y te brinda ventajas competitivas en el mercado.',
        'La duración del desarrollo de una aplicación a medida puede variar dependiendo de la complejidad de tus requerimientos y las funcionalidades que deseas incluir. Nuestro equipo de expertos trabajará en estrecha colaboración contigo para establecer un cronograma realista y asegurarse de que se cumplan los plazos acordados.',
        'Los costos asociados al desarrollo de aplicaciones a medida dependen de varios factores, como la complejidad de los requerimientos y las funcionalidades deseadas. Nuestros consultores elaborarán un presupuesto detallado y transparente que refleje los servicios y el valor que recibirás.'
    ];

    $desarrolloAplicaciones = new SolucionesDetail(
        '',
        'Desarrollo de </br> Aplicaciones a Medida',
        'Adapta las soluciones de software a los requerimientos específicos de tu negocio',
        'Diseñamos y desarrollamos aplicaciones a medida para satisfacer tus necesidades',
        '
        En un entorno empresarial dinámico y en constante cambio, es crucial contar con aplicaciones de software que se adapten rápidamente a los requerimientos específicos de tu negocio. En nuestra empresa, entendemos la importancia de brindarte soluciones personalizadas que impulsen la eficiencia y la competitividad de tu empresa
        </br></br> Trabajamos en estrecha colaboración para analizar tus requerimientos y entender los desafíos específicos que enfrenta tu negocio. Nuestro equipo de expertos en desarrollo de aplicaciones a medida tiene amplia experiencia en el diseño e implementación de soluciones adaptadas a diferentes sectores y áreas de negocio.
        </br></br>Entendemos que cada empresa es única y tiene requisitos específicos. Por lo tanto, nos comprometemos a adaptar las soluciones de software a medida a tu empresa, maximizando su potencial y asegurando que se ajusten perfectamente a tus procesos y flujos de trabajo. 
        </br></br>Confía en nuestro equipo de expertos en desarrollo de aplicaciones a medida para impulsar la transformación digital de tu empresa y llevarla al siguiente nivel. Estamos comprometidos con la excelencia en el desarrollo de software y con brindarte soluciones que te ayuden a alcanzar tus metas empresariales.',
        'https://www.instagram.com/p/Cg4wl5euk6G',
        'Nuestro equipo de expertos en desarrollo de aplicaciones a medida está listo para ayudarte a transformar tus ideas en soluciones de software personalizadas y eficientes.',
        $descripcionAyudaTitulo,
        $descripcionAyuda,
        $preguntasFrecuentes,
        $respuestas
    );
} else if ($identificador == 'Capacitacion') {
    require('SolucionesDetail.php');

    $descripcionAyudaTitulo = [
        'Adaptación a los requerimientos específicos de tu capacitación',
        'Utilización de las últimas tecnologías disponibles',
        'Cumplimiento de normas de análisis y programación',
        'Personalización para satisfacer tus necesidades',
        'Apoyo en empresas de capacitación dinámicas y en crecimiento',
        'Optimización de procesos y rendimiento'
    ];

    $descripcionAyuda = [
        'La capacitación en tecnologías de información es fundamental para una implementación exitosa en cualquier proyecto. En nuestro centro de capacitación, ofrecemos tanto entrenamiento grupal como individual para todo el personal involucrado. Nuestra metodología se basa en utilizar las últimas tecnologías disponibles y cumplir con las normas de análisis y programación establecidas. De esta manera, nos aseguramos de adaptarnos a los requerimientos específicos de tu negocio y brindarte soluciones personalizadas.',
        'Nuestro enfoque se centra en utilizar tecnologías de vanguardia en el desarrollo de aplicaciones y herramientas de software para la capacitación. Esto nos permite ofrecerte soluciones innovadoras y eficientes que se ajusten perfectamente a tus necesidades y te brinden ventajas competitivas en el mercado. Estamos comprometidos en utilizar las últimas tendencias tecnológicas para mejorar tu experiencia de capacitación.',
        'En nuestro proceso de desarrollo de aplicaciones para capacitación, seguimos estrictas normas de análisis y programación. Realizamos un análisis exhaustivo de tus requerimientos para establecer una arquitectura sólida y utilizar las mejores prácticas en codificación. De esta manera, garantizamos la calidad y confiabilidad de las aplicaciones que desarrollamos para la capacitación en tecnologías de información.',
        'Entendemos que cada empresa tiene necesidades específicas en su proceso de capacitación. Por eso, nos comprometemos a personalizar nuestras soluciones para satisfacer tus requisitos. Trabajaremos estrechamente contigo para comprender tus necesidades y diseñar un programa de capacitación a medida que se ajuste perfectamente a tu empresa y a tus flujos de trabajo.',
        'En el ámbito de la capacitación, sabemos que las empresas dinámicas y en crecimiento requieren soluciones flexibles y adaptativas. Nuestro enfoque de desarrollo de aplicaciones para capacitación está diseñado para brindarte el apoyo necesario en este tipo de entornos, permitiéndote adaptarte rápidamente a los cambios y escalar tus programas de capacitación de manera eficiente.',
        'Nuestro objetivo principal es optimizar los procesos y el rendimiento de tu empresa a través de la capacitación en tecnologías de información. Nuestras soluciones están diseñadas para automatizar tareas, mejorar la eficiencia operativa y ayudarte a aprovechar al máximo tus recursos, lo que te permite ahorrar tiempo y costos en tu operación diaria de capacitación.'
    ];

    $preguntasFrecuentes = [
        '¿Cómo beneficia la capacitación en tecnologías de información a mi empresa?',
        '¿Cuánto tiempo lleva desarrollar un programa de capacitación a medida?',
        '¿Cuáles son los costos asociados a la capacitación en tecnologías de información?'
    ];

    $respuestas = [
        'La capacitación en tecnologías de información beneficia a tu empresa al adaptar las soluciones de software a los requerimientos específicos de tu negocio. Esto te permite contar con un programa de capacitación que se ajuste perfectamente a tus flujos de trabajo y te brinde ventajas competitivas en el mercado.',
        'La duración de un programa de capacitación a medida puede variar dependiendo de la complejidad de tus requerimientos y los temas que deseas incluir. Nuestro equipo de expertos trabajará en estrecha colaboración contigo para establecer un cronograma realista y asegurarse de que se cumplan los plazos acordados.',
        'Los costos asociados a la capacitación en tecnologías de información dependen de varios factores, como la duración del programa y los temas a tratar. Nuestros consultores elaborarán un presupuesto detallado y transparente que refleje los servicios y el valor que recibirás en tu programa de capacitación.'
    ];

    $desarrolloAplicaciones = new SolucionesDetail(
        '',
        'Capacitación en </br>Tecnologías de Información',
        'Adapta la capacitación a los requerimientos específicos de tu negocio',
        'Diseñamos programas de capacitación a medida para satisfacer tus necesidades',
        'Uno de los factores más importantes para una implementación exitosa es la capacitación previa de todo el personal interviniente en el proyecto. En nuestro centro de capacitación, ofrecemos tanto entrenamiento grupal como individual para todo el personal involucrado. También tenemos la opción de realizar la capacitación en tu lugar de trabajo, aunque esto puede traer distracciones provenientes de la operación diaria de la empresa.
        </br></br> En un entorno empresarial dinámico y en constante cambio, es crucial contar con programas de capacitación que se adapten rápidamente a los requerimientos específicos de tu negocio. En nuestra empresa, entendemos la importancia de brindarte soluciones personalizadas que impulsen la eficiencia y la competitividad de tu empresa.
        </br></br> Trabajamos en estrecha colaboración para analizar tus requerimientos y entender los desafíos específicos que enfrenta tu negocio en términos de capacitación en tecnologías de información. Nuestro equipo de expertos en desarrollo de programas de capacitación a medida tiene amplia experiencia en el diseño e implementación de soluciones adaptadas a diferentes sectores y áreas de negocio.
        </br></br> Entendemos que cada empresa es única y tiene requisitos específicos en su programa de capacitación. Por lo tanto, nos comprometemos a adaptar la capacitación a medida a tu empresa, maximizando su potencial y asegurando que se ajuste perfectamente a tus procesos y flujos de trabajo.
        </br></br> Confía en nuestro equipo de expertos en desarrollo de programas de capacitación a medida para impulsar el conocimiento y las habilidades de tu personal en el ámbito de las tecnologías de información. Estamos comprometidos con la excelencia en la capacitación y con brindarte soluciones que te ayuden a alcanzar tus metas empresariales.',
        'https://www.instagram.com/p/Cg4wl5euk6G',
        'Nuestro equipo de expertos en desarrollo de programas de capacitación a medida está listo para ayudarte a transformar tus ideas en soluciones de capacitación personalizadas y eficientes.',
        $descripcionAyudaTitulo,
        $descripcionAyuda,
        $preguntasFrecuentes,
        $respuestas
    );
}