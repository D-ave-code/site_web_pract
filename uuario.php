<?php
 $datos =file_get_contents('datos.JSON');
    $data = json_decode($datos);
      
  /*  $data->h1 = "david Rerataaa";
    $nuevoJSON = json_encode($data);
    file_put_contents('datos.JSON',$nuevoJSON); */
    $html = 
    '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Reenie+Beanie&display=swap"
            rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/estiloInicio.css">
        <link rel="stylesheet" href="./css/estiloInicioDos.css">
        <link rel="stylesheet" href="./css/estiloInicoTres.css">
        <link rel="stylesheet" href="./css/estiloInicioCuatro.css">
        <link rel="stylesheet" href="./css/estiloInicioCinco.css">
        <link rel="stylesheet" href="./css/estiloInicioSesi.css">
        <link rel="stylesheet" href="./css/estiloInicioSiete.css">
        <link rel="stylesheet" href="./css/footerUno.css">
        <title>Agencia de Viajes</title>
    </head>
    
    <body>
        <div class="cont-inicio">
            <div class="contain-imagen">
                <div class="contain-titulo">
                    <h1>'.$data->{'title_s1'}.'</h1>
                </div>
                <img src="./images/gggggg-min.jpg" alt="">
            </div>
    
            <div class="contain-tajetas">
    
                <div class="card">
                    <span class="icono-d"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 507.975 507.975"
                            id="svg-75fc">
                            <g>
                                <path
                                    d="m449.95 335.376 58.025-58.025-63.639-63.639-22.275 22.275-13.945-49.697 32.621-32.621c29.754-29.753 47.194-64.979 61.609-98.615 5.594-13.053 2.72-27.976-7.319-38.014l-3.537-3.537c-10.041-10.041-24.961-12.913-38.016-7.321l-3.454 1.481c-38.297 16.412-70.043 37.062-94.358 61.377l-32.402 32.402-49.719-13.921 22.302-22.302-63.64-63.64-58.099 58.1-116.009-32.482-55.002 55 209.489 129.924-44.079 44.08c-9.673 9.673-18.482 20.037-26.702 31.497l-110.708 6.918-31.093 31.091 98.839 65.892 15.581 15.58 65.892 98.839 31.092-31.089 6.564-105.028c12.284-8.216 24.203-17.664 35.387-28.848l44.082-44.083 129.988 209.424 55.062-55.063zm-5.614-79.238 21.213 21.213-24.896 24.896-9.296-33.13zm-212.133-212.133 21.214 21.214-13.021 13.021-33.146-9.281zm-181.136 32.645 15.834-15.834 232.019 64.966-64.551 64.552zm71.204 242.326c-5.521 10.111-10.843 21.02-16.073 32.907l-2.661 6.793-52.84-35.227zm60.299 136.346-33.375-50.061 6.875-2.69.575-.239c9.956-4.381 20.06-9.038 30.124-14.215zm49.572-135.482c-25.812 25.811-57.195 41.651-87.293 54.907l-14.688 5.747-2.126-2.127 5.747-14.687c16.531-37.51 33.788-64.124 55.933-86.268l187.159-187.16c21.604-21.604 50.19-40.113 84.964-55.016l3.453-1.48c1.714-.733 3.671-.357 4.984.958l3.538 3.538c1.316 1.316 1.692 3.272.959 4.984-15.293 35.684-30.541 64.512-55.248 89.219zm200.82 138.59-113.739-183.246 64.562-64.562 65.074 231.911z">
                                </path>
                            </g>
                        </svg></span>
                    <div class="card-body">
                        <p class="fw-bold text-center">'.$data->{'card1_tit_s1'}.'</p>
                        <p class="card-text">'.$data->{'card1_text_s1'}.'</p>
                    </div>
                </div>
                <div class="card">
                    <span class="icono-d"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 507.975 507.975"
                            id="svg-75fc">
                            <g>
                                <path
                                    d="m449.95 335.376 58.025-58.025-63.639-63.639-22.275 22.275-13.945-49.697 32.621-32.621c29.754-29.753 47.194-64.979 61.609-98.615 5.594-13.053 2.72-27.976-7.319-38.014l-3.537-3.537c-10.041-10.041-24.961-12.913-38.016-7.321l-3.454 1.481c-38.297 16.412-70.043 37.062-94.358 61.377l-32.402 32.402-49.719-13.921 22.302-22.302-63.64-63.64-58.099 58.1-116.009-32.482-55.002 55 209.489 129.924-44.079 44.08c-9.673 9.673-18.482 20.037-26.702 31.497l-110.708 6.918-31.093 31.091 98.839 65.892 15.581 15.58 65.892 98.839 31.092-31.089 6.564-105.028c12.284-8.216 24.203-17.664 35.387-28.848l44.082-44.083 129.988 209.424 55.062-55.063zm-5.614-79.238 21.213 21.213-24.896 24.896-9.296-33.13zm-212.133-212.133 21.214 21.214-13.021 13.021-33.146-9.281zm-181.136 32.645 15.834-15.834 232.019 64.966-64.551 64.552zm71.204 242.326c-5.521 10.111-10.843 21.02-16.073 32.907l-2.661 6.793-52.84-35.227zm60.299 136.346-33.375-50.061 6.875-2.69.575-.239c9.956-4.381 20.06-9.038 30.124-14.215zm49.572-135.482c-25.812 25.811-57.195 41.651-87.293 54.907l-14.688 5.747-2.126-2.127 5.747-14.687c16.531-37.51 33.788-64.124 55.933-86.268l187.159-187.16c21.604-21.604 50.19-40.113 84.964-55.016l3.453-1.48c1.714-.733 3.671-.357 4.984.958l3.538 3.538c1.316 1.316 1.692 3.272.959 4.984-15.293 35.684-30.541 64.512-55.248 89.219zm200.82 138.59-113.739-183.246 64.562-64.562 65.074 231.911z">
                                </path>
                            </g>
                        </svg></span>
                    <div class="card-body">
                        <p class="fw-bold text-center">'.$data->{'card2_tit_s1'}.'</p>
                        <p class="card-text">'.$data->{'card2_text_s1'}.'</p>
                    </div>
                </div>
                <div class="card">
                    <span class="icono-d"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 507.975 507.975"
                            id="svg-75fc">
                            <g>
                                <path
                                    d="m449.95 335.376 58.025-58.025-63.639-63.639-22.275 22.275-13.945-49.697 32.621-32.621c29.754-29.753 47.194-64.979 61.609-98.615 5.594-13.053 2.72-27.976-7.319-38.014l-3.537-3.537c-10.041-10.041-24.961-12.913-38.016-7.321l-3.454 1.481c-38.297 16.412-70.043 37.062-94.358 61.377l-32.402 32.402-49.719-13.921 22.302-22.302-63.64-63.64-58.099 58.1-116.009-32.482-55.002 55 209.489 129.924-44.079 44.08c-9.673 9.673-18.482 20.037-26.702 31.497l-110.708 6.918-31.093 31.091 98.839 65.892 15.581 15.58 65.892 98.839 31.092-31.089 6.564-105.028c12.284-8.216 24.203-17.664 35.387-28.848l44.082-44.083 129.988 209.424 55.062-55.063zm-5.614-79.238 21.213 21.213-24.896 24.896-9.296-33.13zm-212.133-212.133 21.214 21.214-13.021 13.021-33.146-9.281zm-181.136 32.645 15.834-15.834 232.019 64.966-64.551 64.552zm71.204 242.326c-5.521 10.111-10.843 21.02-16.073 32.907l-2.661 6.793-52.84-35.227zm60.299 136.346-33.375-50.061 6.875-2.69.575-.239c9.956-4.381 20.06-9.038 30.124-14.215zm49.572-135.482c-25.812 25.811-57.195 41.651-87.293 54.907l-14.688 5.747-2.126-2.127 5.747-14.687c16.531-37.51 33.788-64.124 55.933-86.268l187.159-187.16c21.604-21.604 50.19-40.113 84.964-55.016l3.453-1.48c1.714-.733 3.671-.357 4.984.958l3.538 3.538c1.316 1.316 1.692 3.272.959 4.984-15.293 35.684-30.541 64.512-55.248 89.219zm200.82 138.59-113.739-183.246 64.562-64.562 65.074 231.911z">
                                </path>
                            </g>
                        </svg></span>
                    <div class="card-body">
                        <p class="fw-bold text-center">'.$data->{'card3_tit_s1'}.'</p>
                        <p class="card-text">'.$data->{'card3_text_s1'}.'</p>
                    </div>
                </div>
                <div class="card">
                    <span class="icono-d"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 507.975 507.975"
                            id="svg-75fc">
                            <g>
                                <path
                                    d="m449.95 335.376 58.025-58.025-63.639-63.639-22.275 22.275-13.945-49.697 32.621-32.621c29.754-29.753 47.194-64.979 61.609-98.615 5.594-13.053 2.72-27.976-7.319-38.014l-3.537-3.537c-10.041-10.041-24.961-12.913-38.016-7.321l-3.454 1.481c-38.297 16.412-70.043 37.062-94.358 61.377l-32.402 32.402-49.719-13.921 22.302-22.302-63.64-63.64-58.099 58.1-116.009-32.482-55.002 55 209.489 129.924-44.079 44.08c-9.673 9.673-18.482 20.037-26.702 31.497l-110.708 6.918-31.093 31.091 98.839 65.892 15.581 15.58 65.892 98.839 31.092-31.089 6.564-105.028c12.284-8.216 24.203-17.664 35.387-28.848l44.082-44.083 129.988 209.424 55.062-55.063zm-5.614-79.238 21.213 21.213-24.896 24.896-9.296-33.13zm-212.133-212.133 21.214 21.214-13.021 13.021-33.146-9.281zm-181.136 32.645 15.834-15.834 232.019 64.966-64.551 64.552zm71.204 242.326c-5.521 10.111-10.843 21.02-16.073 32.907l-2.661 6.793-52.84-35.227zm60.299 136.346-33.375-50.061 6.875-2.69.575-.239c9.956-4.381 20.06-9.038 30.124-14.215zm49.572-135.482c-25.812 25.811-57.195 41.651-87.293 54.907l-14.688 5.747-2.126-2.127 5.747-14.687c16.531-37.51 33.788-64.124 55.933-86.268l187.159-187.16c21.604-21.604 50.19-40.113 84.964-55.016l3.453-1.48c1.714-.733 3.671-.357 4.984.958l3.538 3.538c1.316 1.316 1.692 3.272.959 4.984-15.293 35.684-30.541 64.512-55.248 89.219zm200.82 138.59-113.739-183.246 64.562-64.562 65.074 231.911z">
                                </path>
                            </g>
                        </svg></span>
                    <div class="card-body">
                        <p class="fw-bold text-center">'.$data->{'card4_tit_s1'}.'</p>
                        <p class="card-text">'.$data->{'card4_text_s1'}.'</p>
                    </div>
                </div>
    
    
            </div>
        </div>
        <div class="cont-inicio-dos">
            <div class="cont-imagen-dos">
                <div class="cont-img-dos">
    
                </div>
            </div>
            <div class="cont-leterings">
                <div class="cont-leter-uno">
                    <h2>Historia de Viaje</h2>
                    <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                </div>
                <div class="cont-leter-dos">
                    <h1>'.$data->{'title_s2'}.'</h1>
                </div>
            </div>
        </div>
        <div class="con-inicio-tres">
            <img src="'.$data->{'imgcarr1_s3'}.'" alt="" srcset="">
            <img src="'.$data->{'imgcarr2_s3'}.'" alt="" srcset="">
            <img src="'.$data->{'imgcarr3_s3'}.'" alt="" srcset="">
            <img src="'.$data->{'imgcarr4_s3'}.'" alt="" srcset="">
        </div>
        <div class="con-inicio-cuatro">
            <div class="cont-img-cuatro">
                <div class="cuadro-cuatro">
                    <div class="cont"><img  src="'.$data->{'img2_s4'}.'"></div>
                    <div class="cont-dos"><img  src="'.$data->{'img1_s4'}.'" alt=""></div>
                </div>
            </div>
            <div class="leter-cuatro">
                <div class="con-titulo-cuatro">
                    <h1> '.$data->{'title_s4'}.'</h1>
                </div>
                <div class="text-cuatro">
                    <p>'.$data->{'text_s4'}.' </p>
                </div>
            </div>
        </div>
        <div class="cont-inicio-cinco" style="background: url('.$data->{'img1_s5'}.');"> 
            <div class="con-seccion-cinco">
                    <div class="con-text-cinco">
                        <h1>'.$data->{'title_s5'}.'</h1>
                        <p>
                        '.$data->{'text_s5'}.'</p>
                        <button type="button" class="boton">Leer más</button>
                    </div>
            </div>
        </div>
        <div class="cont-inicio-seis">
            <div class="cont-des-seis">
                <div class="conten-text-seis">
                    <h1>'.$data->{'title_s6'}.'</h1>
                    <p>'.$data->{'text_s6'}.'</p>
                    <button type="button">Leer mas</button>
                </div>
            </div>
               <div class="cont-imagen-seis">
                    <img src="'.$data->{'img1_s6'}.'" alt="" srcset="">
                    <div class="circulo-seis">
                
                    </div>
               </div>
            
        </div>
        <div class="cont-inicio-siente">
            <div class="con-seccion-siente">
               <div class="con-text-siente">
                <div class="cont-titulo-siente">
                    <h1>Contactanos</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius consequatur,in doloribus dolor repudiandae nulla cumque iusto</p>
                </div>
                <div class="cont-contac-siete">
                    <svg version="1.1" id="svg-851e" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="u-svg-content"><g><path d="M30,26c3.86,0,7-3.141,7-7s-3.14-7-7-7s-7,3.141-7,7S26.14,26,30,26z M30,14c2.757,0,5,2.243,5,5s-2.243,5-5,5
                        s-5-2.243-5-5S27.243,14,30,14z"></path><path d="M29.823,54.757L45.164,32.6c5.754-7.671,4.922-20.28-1.781-26.982C39.761,1.995,34.945,0,29.823,0
                        s-9.938,1.995-13.56,5.617c-6.703,6.702-7.535,19.311-1.804,26.952L29.823,54.757z M17.677,7.031C20.922,3.787,25.235,2,29.823,2
                        s8.901,1.787,12.146,5.031c6.05,6.049,6.795,17.437,1.573,24.399L29.823,51.243L16.082,31.4
                        C10.882,24.468,11.628,13.08,17.677,7.031z"></path><path d="M42.117,43.007c-0.55-0.067-1.046,0.327-1.11,0.876s0.328,1.046,0.876,1.11C52.399,46.231,58,49.567,58,51.5
                        c0,2.714-10.652,6.5-28,6.5S2,54.214,2,51.5c0-1.933,5.601-5.269,16.117-6.507c0.548-0.064,0.94-0.562,0.876-1.11
                        c-0.065-0.549-0.561-0.945-1.11-0.876C7.354,44.247,0,47.739,0,51.5C0,55.724,10.305,60,30,60s30-4.276,30-8.5
                        C60,47.739,52.646,44.247,42.117,43.007z"></path>
                </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                <h2>Ubicacion</h2>
                <h3>27 13 Lowen Haven</h3>
                </div>
                <div class="cont-contac-siete">
                    <svg version="1.1" id="svg-8ae9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="u-svg-content"><g><path d="M42.595,0H17.405C14.977,0,13,1.977,13,4.405v51.189C13,58.023,14.977,60,17.405,60h25.189C45.023,60,47,58.023,47,55.595
                        V4.405C47,1.977,45.023,0,42.595,0z M15,8h30v38H15V8z M17.405,2h25.189C43.921,2,45,3.079,45,4.405V6H15V4.405
                        C15,3.079,16.079,2,17.405,2z M42.595,58H17.405C16.079,58,15,56.921,15,55.595V48h30v7.595C45,56.921,43.921,58,42.595,58z"></path><path d="M30,49c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S32.206,49,30,49z M30,55c-1.103,0-2-0.897-2-2s0.897-2,2-2
                        s2,0.897,2,2S31.103,55,30,55z"></path><path d="M26,5h4c0.553,0,1-0.447,1-1s-0.447-1-1-1h-4c-0.553,0-1,0.447-1,1S25.447,5,26,5z"></path><path d="M33,5h1c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1c-0.553,0-1,0.447-1,1S32.447,5,33,5z"></path><path d="M56.612,4.569c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c3.736,3.736,3.736,9.815,0,13.552
                        c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
                        C61.128,16.434,61.128,9.085,56.612,4.569z"></path><path d="M52.401,6.845c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c1.237,1.237,1.918,2.885,1.918,4.639
                        s-0.681,3.401-1.918,4.638c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
                        c1.615-1.614,2.504-3.764,2.504-6.052S54.017,8.459,52.401,6.845z"></path><path d="M4.802,5.983c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-4.516,4.516-4.516,11.864,0,16.38
                        c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
                        C1.065,15.799,1.065,9.72,4.802,5.983z"></path><path d="M9.013,6.569c-0.391-0.391-1.023-0.391-1.414,0c-1.615,1.614-2.504,3.764-2.504,6.052s0.889,4.438,2.504,6.053
                        c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
                        c-1.237-1.237-1.918-2.885-1.918-4.639S7.775,9.22,9.013,7.983C9.403,7.593,9.403,6.96,9.013,6.569z"></path>
                </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                <h2>Telefono</h2>
                <h3>27 13 Lowen Haven</h3>
                </div>
                <div class="cont-contac-siete">
                    <svg version="1.1" id="svg-1f10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="u-svg-content"><g><path d="M42.5,22h-25c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S43.052,22,42.5,22z"></path><path d="M17.5,16h10c0.552,0,1-0.447,1-1s-0.448-1-1-1h-10c-0.552,0-1,0.447-1,1S16.948,16,17.5,16z"></path><path d="M42.5,30h-25c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S43.052,30,42.5,30z"></path><path d="M42.5,38h-25c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S43.052,38,42.5,38z"></path><path d="M42.5,46h-25c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S43.052,46,42.5,46z"></path><path d="M38.914,0H6.5v60h47V14.586L38.914,0z M39.5,3.414L50.086,14H39.5V3.414z M8.5,58V2h29v14h14v42H8.5z"></path>
                    </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                <h2>Email</h2>
                <h3>travels@fingo.com</h3>
                </div>
                <div class="cont-contac-siete redes-siente">
                   
                <h2>Siguenos</h2>
                <h3>27 13 Lowen Haven</h3>
                </div>
               </div>
            </div>
        </div>
        <footer>
            <div class="foote-uno">
                Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices
            </div>
            <div class="footer-dos foote-uno">
                Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices
            </div>
        </footer>
    </body>
    <script>
        let text = document.querySelectorAll('.'.edit'.');

        text.forEach((title) => {
            title.addEventListener('.'mouseover'.', () => {
                title.style.border = '.'solid 1px black'.'

            });
            title.addEventListener('.'mouseout'.', () => {
                title.style.border = '.'none'.'
            });
            title.addEventListener('.'click'.', () => {

                let valor1 = prompt("Cambie el texto", title.textContent);
                title.textContent = valor1
               
                var text = title.textContent;
                var id = title.id;

                $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{id:id,
    text:text},
    dataType:"JSON",
    success:function(data)
    {
     
        alert("guardado con exito");
     
    }
   })
            });

        })

        const obtenerDatos = async(text1,text2)=>{
try {
    const response = await fetch('.'./datos.JSON'.')
    const datos = await response.json()
    
    console.log(datos[text1]+" : "+ text2)
} catch (error) {
    console.log(error)
}
        } 
    </script>
    </html>';
    file_put_contents('index1.html',$html);
    header('Location: index1.html');
?>
