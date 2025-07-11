<x-layout>    
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
          <div class="container">
            
          </div>
        </div>
        <nav class="breadcrumbs" >
          <div class="container">
            <ol>
              <li><a href="/">Home</a></li>
              <li class="current">Informasi</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Page Title -->


    <div class="container">
        <div class="row">
           
  
          <div class="col-lg-8">

  
            <!-- Blog Posts Section -->
            <section id="blog-posts" class="blog-posts section">
  
              <div class="container">
  
                <div class="row gy-4">
  
                  <div class="col-12">

        
                    <article>
  
                      {{-- <div class="post-img">
                        <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                      </div> --}}
  
                      <h2 class="title">
                        <a href="/posts/{{$post['id']}}">
                            {{ $post['title'] }}
                        </a>
                      </h2>
  
                      <div class="meta-top">
                        <ul>
                          <li class="d-flex align-items-center"><i class="bi bi-person"></i> {{$post ['author']}}</li>
                        </ul>
                      </div>
  
                      <div class="content">
                        <p>
                          {{ Str::limit ($post ['body'], 50)}}
                        </p>
  
                        <div class="read-more">
                          <a href="/posts/{{$post['id']}} ">Read More &raquo;</a>
                        </div>
                      </div>
  
                    </article>
               
                  </div><!-- End post list item -->
                  
                
                </div><!-- End blog posts list -->
           
              </div>
  
            </section><!-- /Blog Posts Section -->

          </div>
  
          
        
        </div>
      </div>
      
          
    
</x-layout>