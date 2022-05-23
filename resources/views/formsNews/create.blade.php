{{-- @include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
 --}}

 <!DOCTYPE html>
 <html lang="en" >
 <head>
   <meta charset="UTF-8">
   <title>CodePen - Credit Card Form - VueJs</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
 <link rel="stylesheet" href="/css/form_style.css">
 <link rel="stylesheet" href="/css/upload_style.css">
 
 </head>
 <body>
 <!-- partial:index.partial.html -->
 <div class="wrapper" id="app">
     <div class="card-form">
       <div class="card-list">
 <form method="post">
     
       <div class="card-form__inner">
         <div class="card-input">
           <label for="cardNumber" class="card-input__label">Título da Notícia</label>
           <input type="text" id="title" name="title" placeholder="Título" class="card-input__input" required>
         </div>

         <div class="card-input">
           <label for="cardName" class="card-input__label">Subtítulo</label>
           <input type="text" id="subtitle" class="card-input__input">
         </div>

         <div class="card-form__row">
           <div class="card-form__col">
             <div class="card-form__group">
               <label for="cardMonth" class="card-input__label">Categorias</label>
               <select class="card-input__input -select" id="cardMonth" name="categoria">
                 <option value="" disabled selected>Month</option>
                 <option value="" disabled selected>Month</option>
                 <option value="" disabled selected>Month</option>
    
                 </option>
               </select>
             </div>
<br>
             <div class="card-input">
                <label for="cardName" class="card-input__label">Descrição da Notícia</label>

                <textarea  rows="15" cols=""name="description"  id="description" class="card-input__input" required>
                Escreva a notícia aqui...</textarea>
              </div>
        
 
      
         <div class="card-form__row">

         <div class="upload">
            <input type="file" title="" id="image" name="image"  class="drop-here">
            <div class="text text-drop">Imagem</div>
            <div class="text text-upload">Enviando</div>
            <svg class="progress-wrapper" width="300" height="300">
              <circle class="progress" r="115" cx="150" cy="150"></circle>
            </svg>
            <svg class="check-wrapper" width="130" height="130">
              <polyline class="check" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
            </svg>
            <div class="shadow"></div>
          </div>
         </div>
 
         <button class="card-form__button">
           Submit
         </button>
       </div>
     </div>
     
     <a href="https://github.com/muhammederdem/credit-card-form" target="_blank" class="github-btn">
       See on GitHub
     </a>
     <a href="https://github.com/muhammederdem/credit-card-form" target="_blank" class="github-btn">
       See on GitHub
     </a>

   </div>
 <!-- partial -->
   <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js'></script>
 <script src='https://unpkg.com/vue-the-mask@0.11.1/dist/vue-the-mask.js'></script><script  src="./script.js"></script>
 
 </body>
 </html>
 