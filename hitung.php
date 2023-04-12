<?php  

$harga_emas=900000;
$emaspmm = $harga_emas + 100000;

?>
<head>
</head>
<div class="about-section">
      <div class="auto-container">
         <div class="inner-container">
            <div class="row align-items-center clearfix">
               <!-- Image Column -->
              

               <!-- Content Column -->
               <div class="content-column col-lg-12 col-md-12 col-sm-12 mb-0">
                  <div class="about-column">
                     <div class="sec-title">
                        <div class="title"></div>
                        <h2><span></span> </h2>
                     </div><br><br><br>
                     <div class="text">
                   <div class="col-lg-12">
         <div class="box-body">
            <h3>Kalkulator Hitung</h3>
      <form class="" method="post" action="?p=regis.php">
       

         <div class="form-group">
            <label for="username" class="cols-sm-2 control-label">Nominal Emas</label></label>
            <div class="cols-sm-10">
               <div class="input-group">
                  <span class="input-group-addon"></span>
                  <input type="text" class="form-control" name="gram" id="gram" placeholder="Nominal Emas Minimal 5gr" onkeyup="total()"  />
               </div>
            </div>
         </div>
         <div class="form-group">
            <label for="email" class="cols-sm-2 control-label">Harga Emas Saat ini</label>
            <div class="cols-sm-10">
               <div class="input-group">
                  <span class="input-group-addon"></span>
                  <input type="hidden" class="form-control" value="<?php echo $emaspmm?>" name="harga1" id="harga" placeholder="Harga Emas Saat Ini" />
                  <input type="hidden" class="form-control" value="<?php echo $harga_emas?>" name="hargaasli" placeholder="Harga Emas Saat Ini" />
                  <input type="text" class="form-control" value="<?php echo "Rp. ".number_format($harga_emas, 0 , ',' , '.' ) ?>" name="harga" placeholder="Harga Emas Saat Ini" readonly />

               </div>
            </div>
         </div>

         <div class="form-group">
            <label for="text" class="cols-sm-2 control-label">Total Pembelian</label>
            <div class="cols-sm-10">
               <div class="input-group">
                  <span class="input-group-addon"></span>
                  <input type="text" class="form-control" name="total1" onkeyup="total()"  id="total1" placeholder="text" />
               </div>
            </div>
         </div>
         <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Total Gram Investasi</label>
            <div class="cols-sm-10">
               <div class="input-group">
                  <span class="input-group-addon"></span>
                  <input type="text" class="form-control" name="grinvest" id="grinvest" placeholder="Total Gram Investasi" readonly  />
               </div>
            </div>
         </div>
          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Senilai</label>
            <div class="cols-sm-10">
               <div class="input-group">
                  <span class="input-group-addon"></span>
                  <input type="text" class="form-control" name="invest" id="invest" placeholder="Total Uang Investasi" readonly />
               </div>
            </div>
         </div>
         <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Total Gram Jaminan</label>
            <div class="cols-sm-10">
               <div class="input-group">
                  <span class="input-group-addon"></span>
                  <input type="text" class="form-control" name="grjaminan" id="grjaminan" placeholder="Total Gram Jaminan" readonly />
               </div>
            </div>
         </div>
          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Senilai</label>
            <div class="cols-sm-10">
               <div class="input-group">
                  <span class="input-group-addon"></span>
                  <input type="text" class="form-control" name="jaminan" id="jaminan" id="dengan-rupiah" placeholder="Total Uang Jaminan"  />
               </div>
            </div>
         </div>
         <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Lama Kontrak</label>
            <div class="cols-sm-10">
               <div class="input-group">
                  <span class="input-group-addon"></span>
                  
                  <select name="tot_pin_requested" onchange="calculateAmount(this.value)" class="form-control" required>
      <option value="" disabled selected>Choose your option</option>
      <option value="0.025">1 bulan</option>
      <option value="0.05">3 bulan</option>
      <option value="0.12">6 bulan</option>
      <option value="0.3">12 bulan</option>
    </select>
               </div>
            </div>
         </div>
         <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Total Omset</label>
            <div class="cols-sm-10">
               <div class="input-group">
                  <span class="input-group-addon"></span>
                  <input type="text" class="form-control" name="omset" id="tot_amount" placeholder="Total Uang Jaminan" readonly />
               </div>
            </div>
         </div>
       
<br>
         <div class="form-group ">
            <button type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">Daftar</button>
         </div>
      </form>
         </div></div>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
   </div>
   <!-- End About Section -->
<script type="text/javascript">
  var dengan_rupiah = document.getElementById('dengan-rupiah');
  dengan_rupiah.addEventListener('keyup', function(e)
  {
    dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
  });
  
  /* Fungsi */
  function formatRupiah(angka, prefix)
  {


    var number_string = String(angka).replace(/[^,\d]/g, '').toString(),
      split = number_string.split(','),
      sisa  = split[0].length % 3,
      rupiah  = split[0].substr(0, sisa),
      ribuan  = split[0].substr(sisa).match(/\d{3}/gi);
      
    if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }
    
    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
  }

   function total()
        {
           var a = document.getElementById("gram").value;
           var b = document.getElementById("harga").value;
           var total1= a*b;
           document.getElementById('total1').value= formatRupiah(total1, 'Rp. ');
           var invest=total1/100 * 30
           document.getElementById('invest').value=formatRupiah(invest, 'Rp. ');
           var jaminan=total1/100 * 70
           document.getElementById('jaminan').value=formatRupiah(jaminan, 'Rp. ');
           var grinvest=a/100 * 30
           document.getElementById('grinvest').value=formatRupiah(grinvest, 'Rp. ');
           var grjaminan=a/100 * 70
           document.getElementById('grjaminan').value=formatRupiah(grjaminan, 'Rp. ');

        }
        function calculateAmount(val) {
                var a = document.getElementById("gram").value;
                var total1 = document.getElementById('total1').value;
                

                var numberRegexG = /\d$/g;
                 var total = total1.replace(/[^0-9\\]+/g, '');
                 
                var tot_price = val * total;
                let divobj = document.getElementById('tot_amount');
                divobj.value = tot_price;
            }
</script>