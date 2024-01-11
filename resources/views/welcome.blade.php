<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Internship task</title>

</head>

<body>

  <div class="container-fluid">


    <nav class="navbar bg-primary text-center">
       
         <div class="text-center" style="text-align: center;">
            <h1 class="text-center" >Start Time 02:30 PM and End Time 04:00 PM </h1>
         </div>
    
      </nav>

    <div class="row">

      <!-- Sidebar -->
      <nav class="col-md-3 col-lg-2 d-md-block sidebar">
        <div class="sidebar-sticky pl-2 fs-2 ">
          <!-- Add your sidebar content here -->
          <p class="pt-5"  style="font-size: 20px; ">I'am Jahid hasan <br> I have  graduation Diploma in Enginnering ,Computer since & Technology  I love to working in Laravel</p>
        </div>
      </nav>

      <!-- Main Content -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 ">
        <div class="content">
          <!-- Add your main content here -->
          <div class="row">

            
                @foreach ($posts as $post)
                <div class="col-sm-1 col-md-2 col-lg-3 p-3" >
        <div class="card" style="height: 250px;">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <p class="card-text">Author: {{ $post->user->name }}</p>
            </div>
        </div>
    </div>
    @endforeach
         
            

            
   

          </div>
          {{ $posts->links() }}
        
        </div>
      
          <div class="card mt-4" style="width: 100%;">
              
            <div class="card-body text-center">
                <a href="" class="text-center">GitHub Repository Link</a>  
            </div>
          </div>
      </main>
      

    </div>

    
  </div>



 
  
  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
