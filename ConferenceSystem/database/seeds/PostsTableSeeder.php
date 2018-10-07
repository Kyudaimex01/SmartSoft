<?php
use App\Post;
use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        Category::truncate();

        $category = new Category;
        $category->name = "Microsoft Dynamics";
        $category->save();

        $category = new Category;
        $category->name = "Office";
        $category->save();

        $category = new Category;
        $category->name = "Microsoft Azure";
        $category->save();

        $category = new Category;
        $category->name = "Windows";
        $category->save();

        $category = new Category;
        $category->name = "All Microsoft Products";
        $category->save();

        $category = new Category;
        $category->name = "Laravel";
        $category->save();

        $category = new Category;
        $category->name = "Java";
        $category->save();

        $post = new Post;
        $post->title = "Microsoft Cognitive Services: Face API";
        $post->excerpt = "On Demand
        Inspira a tus aplicaciones, sitios web y robots con algoritmos inteligentes para ver, escuchar, hablar, entender e interpretar las necesidades de los usuarios a través de métodos naturales de comunicación. Transforme su negocio con Inteligenia Artifical hoy mismo de manera gratuita.

Si quieres aprender mas sobre Servicios Cognitivos echa un vistazo en https://azure.microsoft.com/es-es/try/cognitive-services/ y registrate para este webinar.

    Introducción a los Cognitive Services de Microsoft
    ¿Qué es Face API?
    Usos y aplicaciones de Face API
    Face API en detalle: Código y ejemplos

Skip To Main
Microsoft

    Microsoft 365 Azure Office 365 Dynamics 365 SQL Windows 10";
        $post->body = "<p> </p>";
        $post->published_at = Carbon::now()->subDay(16);
        $post->category_id = 5;
        $post->save();

        $post = new Post;
        $post->title = "Tutoria virtual en vivo curso \"OneNote, la principal herramienta de colaboración";
        $post->excerpt = "On Demand
        Los invitamos a participar de la tutoría virtual en vivo sobre el curso gratuito \"OneNote, la principal herramienta de colaboración\"

El curso permite a los educadores desarrollar los escenarios necesarios para favorecer el aprendizaje de los estudiantes a partir del trabajo en equipo, la resolución de problemas y la creatividad.

Durante esta sesión nuestros espcialistas presentarán las principales características del curso y responderán a sus consultas e inquietudes en vivo para que logres alcanzar la certificación del curso con éxito.

Recomendamos comenzar el curso antes de asistir a la tutoría para un mejor aprovechamiento de la instancia en vivo.

¡Los esperamos!


    Presentación del curso
    Agenda de trabajo propuesta
    Espacio de trabajo y discusión
    Cierre

Skip To Main
Microsoft

    Microsoft 365 Azure Office 365 Dynamics ";
        $post->body = "<p></p>";
        $post->published_at = Carbon::now()->subDay(15);
        $post->category_id = 5;
        $post->save();

        $post = new Post;
        $post->title = "Seguridad en la Oficina del Futuro";
        $post->excerpt = "On Demand
        La tendencia más grande que influencia hoy a la industria de IT es la convergencia entre el mundo de consumo y comercial. Este efecto, tiene oportunidades y riesgos en la administración de los recursos tecnológicos en la empresa y gobierno actuales. Durante esta charla conversaremos sobre esta tendencia, la inclusión de los Millenials y los retos de seguridad que enfrentamos día a día.";
        $post->body = "<p></p>";
        $post->published_at = Carbon::now()->subDay(14);
        $post->category_id = 5;
        $post->save();

        $post = new Post;
        $post->title = "Servo Escolar una herramienta 360 para tu institución académica";
        $post->excerpt = "On Demand
        Agregue valor a sus servicios educativos, a través de la gestión escolar y administrativa desde la nube. Además conozca las ventajas del autoservicio para atender en línea su comunidad educativa.";
        $post->body = "<p> </p>";
        $post->published_at = Carbon::now()->subDay(13);
        $post->category_id = 1;
        $post->save();

        $post = new Post;
        $post->title = "Introducción a Azure IoT Suite";
        $post->excerpt = "6 Nov, 2018 11:00 AM - 3:00 PM
        Ver fechas adicionales, idiomas y sesiones disponibles para este entrenamiento en https://aka.ms/IoTConnectedSolutions Aprenda como conectar fácilmente y de forma segura sus dispositivos de internet de las cosas con Azure IoT como enviar datos de telemetría desde el dispositivo a la nube, conocer el estado de sus dispositivos y poder tomar las acciones necesarias cuando un dispositivo requiere atención. Por medio del envío de mensajes de la nube al dispositivo, envié comandos y notificaciones a todos sus dispositivos conectados y rastre la entrega de los mensajes con acuses de recepción. Los mensajes al dispositivo se envían de manera duradera para comunicarse con dispositivos con comunicación intermitente.";
        $post->body = "<p></p>";
        $post->published_at = Carbon::now()->subDay(12);
        $post->category_id = 3;
        $post->save();

        $post = new Post;
        $post->title = "Remote Desktop Solutions (RDS) en Azure";
        $post->excerpt = "30 Oct, 2018 4:00 AM - 6:00 AM 
        Consulte fechas adicionales (e idiomas) de este curso en: https://aka.ms/IndustrySolutionsAzure. Aprenda a planificar y desplegar soluciones líderes en del mercado en Azure. En este caso profundizaremos en el despliegue de Remote Destopk Services en Azure.";
        $post->body = "<p></p>";
        $post->published_at = Carbon::now()->subDay(11);
        $post->category_id = 3;
        $post->save();

        $post = new Post;
        $post->title = "Introducción a la Seguridad y el Cumplimiento de Microsoft 365";
        $post->excerpt = "25 Oct, 2018 11:00 AM - 1:00 PM
        Microsoft 365 provee una gran colección de capacidades de seguridad para la organización moderna. En esta sesión recibirá una introducción de las capacidades de seguridad incluidas en Microsoft 365 y recursos para continuar con la exploración de la Seguridad de la Información.";
        $post->body = "<p></p>";
        $post->published_at = Carbon::now()->subDay(10);
        $post->category_id = 4;
        $post->save();

        $post = new Post;
        $post->title = "Conociendo Azure Stack";
        $post->excerpt = "24 Oct, 2018 11:00 AM - 1:00 PM
        Azure Stack es una extensión de Azure, trae la agilidad y rápida innovación de la computación en la nube a su ambiente en sitio. Solo Azure Stack le permite entregar servicios de Azure desde su centro de datos para proporcionar flexibilidad y control para desarrollos de nube realmente híbridos. Con Azure Stack maximiza la productividad al permitir que los desarrolladores implementen aplicaciones de la misma manera tanto en Azure como en Azure Stack.";
        $post->body = "<p></p>";
        $post->published_at = Carbon::now()->subDay(9);
        $post->category_id = 3;
        $post->save();

        $post = new Post;
        $post->title = "Technical Deep Dive AI: Data Science Process and Machine Learning";
        $post->excerpt = "22 Oct, 2018 11:00 AM - 1:00 PM
        En este webcast le brindaremos una visión del proceso de ciencia de datos y de la plataforma de Azure Machine Learning, los servicios y herramientas para crear, implementar y administrar el proceso de aprendizaje máquina y los modelos en la nube. Le mostraremos las mejores prácticas de cómo preparar sus datos, crear su modelo de aprendizaje máquina, desplegar su modelo y consumirlo dentro de su aplicación. Además, revisaremos las diferentes herramientas y servicios que tiene disponibles para cada proceso. Aprenda a utilizar Azure Machine Learning para construir sus modelos de aprendizaje máquina para desplegarlos en la nube y obtener análisis predictivo.";
        $post->body = "<p></p>";
        $post->published_at = Carbon::now()->subDay(8);
        $post->category_id = 3;
        $post->save();

        $post = new Post;
        $post->title = "Haciendo aplicaciones y bots inteligentes utilizando Azure Cognitive Services";
        $post->excerpt = "18 Oct, 2018 11:00 AM - 1:00 PM
        Ver fechas adicionales, idiomas y sesiones disponibles para este entrenamiento en https://aka.ms/SmarterAppsBotFramework Entienda como crear aplicaciones inteligentes, recibiendo las mejores prácticas y orientaciones de arquitectura para la planificación, construcción y mantenimiento de bots y aplicaciones inteligentes que funcionan con servicios cognitivos. Usted aprenderá como construir y conectar bot inteligentes que interactúan con sus usuarios de forma natural, desde cualquier lugar – desde un sitio web, Cortana, Skype, Teams, e-mail de Office 365, Slack, Facebook Messenger, Skype for Business y otras plataformas.";
        $post->body = "<p></p>";
        $post->published_at = Carbon::now()->subDay(7);
        $post->category_id = 3;
        $post->save();

        $post = new Post;
        $post->title = "Hybrid Cloud Management & Security: Automatización y Seguridad";
        $post->excerpt = "17 Oct, 2018 3:00 AM - 6:00 AM 
        Consulte otras fechas (e idiomas) para asistir a este curso: https://aka.ms/CloudMgmtSecurity. El foco principal del curso es conocer las características de Microsoft Operations Management Suite (OMS). La solución basada en cloud de administración de OMS permite a los clientes administrar y proteger su infraestructura local y en la nube. Al tratarse de una solución cloud, es muy sencillo para el Partner ponerla en marcha en el cliente con un esfuerzo mínimo en servicios de infraestructura.";
        $post->body = "<p></p>";
        $post->published_at = Carbon::now()->subDay(6);
        $post->category_id = 3;
        $post->save();

        $post = new Post;
        $post->title = "SAP en Microsoft Azure";
        $post->excerpt = "17 Oct, 2018 11:00 AM - 1:00 PM 
        Incremente su experiencia en las soluciones en la nube aprendiendo como planear e implementar sobre Microsoft Azure las soluciones de escenarios clave en el mercado. Incluyendo Soluciones de Escritorio remoto, Citrix, SAP y Red Hat. Obtenga los conocimientos necesarios para ayudar a sus clientes a lograr sus metas para su transformación digital.";
        $post->body = "<p></p>";
        $post->published_at = Carbon::now()->subDay(5);
        $post->category_id = 3;
        $post->save();

        $post = new Post;
        $post->title = "Hybrid Cloud Management & Security: Introducción y Log Analytics";
        $post->excerpt = "16 Oct, 2018 3:00 AM - 6:00 AM
        Consulte otras fechas (e idiomas) para asistir a este curso: https://aka.ms/CloudMgmtSecurity. El foco principal del curso es conocer las características de Microsoft Operations Management Suite (OMS). La solución basada en cloud de administración de OMS permite a los clientes administrar y proteger su infraestructura local y en la nube. Al tratarse de una solución cloud, es muy sencillo para el Partner ponerla en marcha en el cliente con un esfuerzo mínimo en servicios de infraestructura.";
        $post->body = "<p></p>";
        $post->published_at = Carbon::now()->subDay(4);
        $post->category_id = 3;
        $post->save();

        $post = new Post;
        $post->title = "Que hay de nuevo en Office 365";
        $post->excerpt = "16 Oct, 2018 11:00 AM - 1:00 PM
        Debido a la rápida evolución de Office 365, diseñamos esta capacitación técnica para ayudar a nuestros socios MPN a mantenerse actualizados sobre los últimos avances. Recibirá noticias y actualizaciones importantes sobre la disponibilidad de nuevos servicios y actualizaciones en Office 365. La información presentada será principalmente de naturaleza técnica, pero ocasionalmente nuestros expertos técnicos proporcionarán noticias comerciales de interés para los socios que desarrollan esta práctica de nube.";
        $post->body = "<p></p>";
        $post->published_at = Carbon::now()->subDay(3);
        $post->category_id = 2;
        $post->save();

        $post = new Post;
        $post->title = "Novedades y Noticias Destacadas en Business Applications";
        $post->excerpt = "11 Oct, 2018 3:00 AM - 4:00 AM
        Esta sesión está diseñada para ayudar a los Partners de Microsoft a mantenerse actualizados sobre los últimos noticias en Business Applications. El equipo de Preventas Técnica y Asesoramiento, presenta en esta serie de webcasts mensuales las noticias, artículos y documentos más importantes que se lanzaron durante el último mes. Los temas presentados son una combinación de información técnica, de marketing y de ventas. Durante esta sesión online, puede hacer preguntas y realizar comentarios.";
        $post->body = "<p></p>";
        $post->published_at = Carbon::now()->subDay(2);
        $post->category_id = 1;
        $post->save();

        $post = new Post;
        $post->title = "Novedades y noticias destacadas en el mundo de las Aplicaciones de Negocio";
        $post->excerpt = "11 Oct, 2018 11:00 AM - 12:00 PM 
        Esta sesión es diseñada para ayudar nuestros Partners a se mantener actualizados cuanto a las evoluciones más recientes de nuestras Aplicaciones de Negocio. El equipo de Servicios Técnicos de Preventas y Implementación presenta, en esta serie de webcasts mensuales, las novedades, artículos y documentos más importantes publicados en el último mes. Los tópicos presentados son una mezcla de informaciones técnicas, de mercadeo e de ventas. Durante el webcast, es posible hacer preguntas e proporcionar feedback. Las siguientes tecnologías serán abordadas en este evento: o Microsoft Dynamics 365 (soluciones de Customer Engagement, Finance and Operations, Talent y Business Central) o Microsoft Flow o Microsoft PowerApps o Microsoft Common Data Service for Apps o Microsoft Common Data Service for Analytics o Power BI Público alvo: personas involucradas en ventas, preventas, implementación o soporte de cualquier de estas tecnologías. Nível técnico: introductorio, pero no es indicado para usuario";
        $post->body = "<p></p>";
        $post->published_at = Carbon::now()->subDay(1);
        $post->category_id = 1;
        $post->save();
    }
}
