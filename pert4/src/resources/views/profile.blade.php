@extends('layouts.main')

@section('content')
    <!-- <div><h1><center>INI HALAMAN PROFILE</center></h1></div> -->
    
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active img-fluid">
        <img src="https://blog-edutore-partner.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2020/06/24080542/kampus-UEU.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Kampus Kebun Jeruk</h5>
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus repellat et fugit nobis dolorem explicabo, incidunt molestias possimus officiis illo inventore itaque delectus temporibus sunt facere amet voluptatibus. Corporis, mollitia?</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://mediacdn.quipper.com/media/W1siZiIsIjIwMjIvMDMvMjIvMTAvMTEvNDEvYjMwZDdiODAtNmQxZC00MmQyLTg0YzctMzdhZWI5YmMxNjc1LyJdLFsicCIsInRodW1iIiwiMTIwMHhcdTAwM2UiLHt9XSxbInAiLCJjb252ZXJ0IiwiLWNvbG9yc3BhY2Ugc1JHQiAtc3RyaXAiLHsiZm9ybWF0IjoianBnIn1dXQ.jpg?sha=988805f369e3c9a2" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Kampus Citra Raya</h5>
          <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde velit, vel qui necessitatibus dolorum beatae iusto quasi culpa maiores quis error explicabo pariatur, expedita cum, quos iste. Minima, corrupti ullam!</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://mediacdn.quipper.com/media/W1siZiIsIjIwMjIvMDMvMjIvMTAvMDcvNTUvMmFhOTcyZTUtYTY2ZS00OTdiLWFkNTAtOGFkYTE2Y2RlZjA0LyJdLFsicCIsInRodW1iIiwiMTIwMHhcdTAwM2UiLHt9XSxbInAiLCJjb252ZXJ0IiwiLWNvbG9yc3BhY2Ugc1JHQiAtc3RyaXAiLHsiZm9ybWF0IjoianBnIn1dXQ.jpg?sha=7e9c7416563061ca" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Kampus Harapan Indah Bekasi</h5>
          <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis et consequatur exercitationem laudantium dolor iste corrupti cupiditate iusto nisi blanditiis expedita, in perspiciatis tenetur architecto aperiam omnis culpa ipsum velit?</p> -->
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
@endsection