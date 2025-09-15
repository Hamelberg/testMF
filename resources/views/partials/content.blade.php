<div class="container my-4">  <!-- Tambah container + margin atas/bawah -->
  <div class="accordion" id="accordionExample">


    @include('partials.logout') {{-- Slide ditaruh di sini --}}

<!-- VIDEO TUTORIAL -->
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button" type="button" data-bs-toggle="collapse" 
            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Video Tutorial
    </button>
  </h2>
  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <p><strong>ISI NYA UNTUK VIDEO TUTORIAL</strong></p>
      
      <div class="ratio ratio-16x9"> 
        {{-- Gunakan Bootstrap ratio agar responsif --}}
        <video src="{{ asset('videos/LMN - JKT (Landscape).mp4') }}" 
               controls 
               class="w-100 rounded">
        </video>
      </div>
    </div>
  </div>
</div>


<!-- VIDEO SOP -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Video Standard Operating Procedure
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          ISINYA UNTUK Standard Operating Procedure
        </div>
      </div>
    </div>

<!-- MATERI -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Untuk Materi
        </button>
      </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            ISINYA UNT
            @include('partials.form')
            </div>
        </div>
    </div>
