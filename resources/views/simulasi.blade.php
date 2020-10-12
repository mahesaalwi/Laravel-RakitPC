<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simulasi perakitan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/simulasi.css')}}">
</head>
<body>

        <div class="wrapper">
        <!-- Sidevar -->
        <nav id= "sidebar">
           <div class="sidebar-header">
                <h3>Simulasi Perakitan</h3>
           </div>

           <ul class="list-unstyled components">
                <p>Dummy Heading</p>
                
                <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" >Simulasi</a>
                </li>

                <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Profuk Keranjang</a>
               </li>
           
               <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Produk terbaru</a>
               </li>

               <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Produk terlaris</a>
               </li>

           </ul>
        </nav>

        <!-- page content -->
        <div id="content"> 
            <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fab fa-camera"> ini icon</i>
                    </button>
                </div>
            </nav>
        </div>
        
        </div>
 
<script type="text/javascript" src="{{ asset ('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset ('js/simulasi.js') }}"></script>      
</body>
</html>