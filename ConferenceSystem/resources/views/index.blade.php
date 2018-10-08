@extends('layouts.syslayout')

@section('content')

    <div id="slides">
        <ul class="slides-container">
            <li>
                <img src="img/1.jpg" alt="">
                <div class="description" >
                    <h2 class="description__title c-green">BIENVENIDOS</h2>
                    <P class="description_text">Al Sitio Web de Conferencias de la Universidad Mayor de San Simón (UMSS), sitio responsable del resguardo y custodia de toda documentación académica e institucional. Aquí encontrará información relevante y de utilidad en lo que respecta a charlas y cursos. El sitio de Conferencias de la UMSS trabaja al servicio de la comunidad universitaria de San Simón y público en general.</P>
                </div>
            </li>
            <li>
                <img src="img/2.jpg" alt="">
                <div class="description" >
                    <h2 class="description__title c-green">VISION</h2>
                    <P class="description_text">El sitio de Conferencias de la UMSS pretende constituirse en una instancia estratégica de manejo de la información documental de charlas, cursos de esta universidad, a partir de mantener una relación estrecha con todas las carreras y facultades.</P>
                </div>
            </li>
            <li>
                <img src="img/3.jpg" alt="">
                <div class="description" >
                    <h2 class="description__title c-green">MISION</h2>
                    <P class="description_text">El sitio de Conferencias de la UMSS es la instancia encargada del resguardo y custodia de toda documentación de la UMSS en su inter relación con las diferentes carreras y facultades.</P>
                </div>
            </li>
            <li>
                <img src="img/4.jpg" alt="">
                <div class="description" >
                    <h2 class="description__title c-green">ACTIVIDAD PRINCIPAL</h2>
                    <P class="description_text">Realizar procesos de recepción, descarga, codificación, ordenamiento y sistematización, del archivo, disponer de información fidedigna, y confiable que permita  la documentación y coadyuvar en los procesos de sistemas de información administrativa y académica.</P>
                </div>
            </li>
        </ul>
        <nav class="slides-navigation">
            <a href="#" class="next">&#62</a>
            <a href="#" class="prev">&#60</a>
        </nav>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.superslides.js"></script>
@stop

