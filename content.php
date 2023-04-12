<!-- Services Section -->
	<div class="about-section" id="about">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row align-items-center clearfix">
					<!-- Image Column -->
					<div class="image-column col-lg-6">
						<div class="about-image">
							<div class="about-inner-image">
								<img src="images/about/home-about.png" alt="about">
							</div>
						</div>
					</div>

					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
						<div class="about-column">
							<div class="sec-title">
								<div class="title">SEKILAS TENTANG</div>
								<h2><span> PODO MORO MAS (PMM)</span></h2>
							</div>
							<div class="text">
								
<p><em>CARA MENABUNG EMAS YANG MUDAH BAGI PEMULA DI PMM.</em></p>

<p>Sudah memiliki penghasilan yang tetap bukan berarti masa depan Anda terjamin. Untuk menjamin masa depan Anda lebih baik dan aman, ada satu tindakan sedari dini yaitu investasi emas. Banyak jenis investasi yang juga baik seperti investasi saham, deposito, tanah dan lainnya.<br />
Emas tidak hanya populer sebagai perhiasan tetapi emas di era moderen adalah sebagai instrumen investasi yang aman, likuiditas tinggi dan cepat dan tentunya sangat menguntungkan untuk jangka waktu yang panjang. Oleh karena itu emas diburu sebagai produk investasi.<br />
PMM akan membantu Anda untuk investasi emas yang mudah dan aman serta menguntungkan yaitu sbb. :</p>


							</div>
							
						</div>
					</div>
					<div class="content-column col-lg-12 col-md-12 col-sm-12 mb-12">
						<div class="about-column">
							
							<div class="text">
								
<p><strong>1). PASTIKAN TUJUAN</strong></p>

<p>Banyak tujuan yang bisa ditargetkan dari investasi emas seperti: tabungan pernikahan, pendidikan, investasi hari tua dan lainnya untuk jangka waktu 10 - 20 tahun kedepan.</p>

<p><strong>2). PANTAU HARGA EMAS SECARA BERKALA</strong></p>

<p>Saat ini tidak sulit memantau harga emas karena banyak situs internet dan ada juga aplikasi harga emas di ponsel untuk lebih mudah memantau upto date harga emas.</p>

<p><strong>3).BELI EMAS MURNI BATANGAN BERSERTIFIKAT</strong></p>

<p>Banyak penjual emas batangan yang menjual logam mulia tersebut dengan cara cepat namun tidak menyertakan sertifikat yakni emas batangan saja.<br />
Pastikan Anda membeli emas batangan bersertifikat yang direkomendasikan oleh PMM dan periksa keasliannya di tempat lain.</p>

<p><strong>4). PILIH PERUSAHAAN</strong></p>

<p>Pilih perusahaan yang dipercaya dan bisa menguntungkan Anda dengan memperhatikan situs website, rekening perusahaan, rencana pemasaran dan lain sebagainya.</p>

<p><strong>5). INOVASI PERUSAHAAN</strong></p>

<p>Mengikuti perkembangan inovasi-inovasi perusahaan yang berpihak kepada Anda dan memberikan keuntungan signifikan kepada semua customer.</p>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- End Services Section -->
	
	
	<!-- About Section -->
	<div class="about-section" id="about">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row align-items-center clearfix">
					<!-- Image Column -->
					<div class="image-column col-lg-6">
						<div class="about-image">
							<div class="about-inner-image">
								<img src="images/about/home-about.png" alt="about">
							</div>
						</div>
					</div>

					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12 mb-0">
						<div class="about-column">
							<div class="sec-title">
								<div class="title">about PODO MORO MAS</div>
								<h2><span>PODO MORO MAS</span></h2>
							</div>
							<div class="text">
								<?php
                     include 'config.php';
                     $sql12 = "SELECT * FROM about";
                     $query12 = mysqli_query($db,$sql12);
                     $ambil12 = mysqli_fetch_array($query12);
                        
                        $deskripsi = $ambil12['deskripsi'];
                     ?>
                       <?php echo $deskripsi; ?>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- End About Section -->
	
	
	
	<!-- Sponsors Section -->
	<div class="sponsors-section">
		<div class="auto-container">
			
			<div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                </ul>
            </div>
			
		</div>
	</div>
	<!--End Sponsors Section-->



	<!-- Project Section -->
	<div class="project-section">
		<div class="auto-container">
		
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">Artikel</div>
						<h2><span>Artikel</span></h2>
					</div>
					<div class="pull-right">
						<a href="#" class="cases">all Cases <span class="arrow ti-angle-right"></span></a>
					</div>
				</div>
			</div>
			
		</div>
		<div class="outer-container" id="event">
			<div class="row clearfix">

				<!-- Column -->
				<div class="column col-lg-12 col-md-12 col-sm-12">
					<div class="row clearfix">
						
						<!-- Inner Column -->
						<?php
                     include 'config.php';
                     $sql12 = "SELECT * FROM artikel";
                     $query12 = mysqli_query($db,$sql12);
                     while($ambil12 = mysqli_fetch_array($query12))
                     {

                     $judul = $ambil12['judul'];
                     $foto = $ambil12['foto'];
                        
                        
                     ?>
                      
						<div class="inner-column col-lg-3 col-md-3 col-sm-3">
							<div class="gallery-block">
								<div class="inner-box">
									<div class="image">
										<img src="admin/images/artikel/<?php echo $foto ?>" alt="" />
										<div class="overlay-box">
											<div class="overlay-inner">
												<h3><a href="#"><?php echo $judul  ?></a></h3>
												<div class="designation">Finance, Consulting</div>
												<a href="#" class="arrow ti-angle-right"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Inner Column -->
						
						<?php } ?>
						<!-- Inner Column -->
						
						
					</div>
				</div>
				
				
				
			</div>
		</div>
	</div>
	<!-- End Project Section -->