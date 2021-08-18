<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        #sig-canvas {
            border: 2px dotted #CCCCCC;
            border-radius: 15px;
            cursor: crosshair;
          }

        #sig-image {
          box-shadow: 0px 5px 20px 5px rgba(0, 0, 0, 0.25);
        }
    </style>
  </head>
  <body class="text-center">
    <!-- Content -->
    <div class="container">
      <div class="row mt-4">
        <div class="col-md-6" style="margin:auto">
          <h5>PrEP สปสช</h5>
          <h6 class="text-primary"><strong>นาย กล้าแกร่ง เกรียงไกร</strong></h6>
          <h6 class="text-primary"><strong>UIC: กก010101</strong></h6>
          <h6 class="text-primary">id_card: 1509955003325</h6>
          <h6 class="text-primary">PrEP Code: NKP0055</h6>
          <h6 class="text-primary">PrEP Visit: Month 0</h6>
          <h6 class="text-primary">Cretinine: 1.1 mg/dL</h6>
          <h6 class="text-primary">eGFR: 70</h6>
          <ul class="text-left">
            <li>อนุมัติการจ่ายยา PrEP</li>
            <li>วันที่รับ 2021-01-19</li>
            <li>รหัส Lot: WR00215</li>
            <li>ชื่อยา: TENO-EM</li>
            <li>ชนิดยา: Tenofovir 300mg/Emtricitabine 200mg</li>
            <li>ขนาดกิน: 1 เม็ด : 24 ชั่วโมง</li>
            <li>จำนวนรับ: 1 ขวด (30 เม็ด)</li>
          </ul>

          <h6 class="text-primary ml-4">พญ.ปรารถนา ลีนะศิริมากุล</h6>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h5>เซ็นชื่อ</h5>
          <!-- <p>Sign in the canvas below and save your signature as an image!</p> -->
        </div>
      </div>
      <div class="row">
        <div
          class="col-md-12"
          style="width: 100vw; margin-bottom: 20px;"
        >
          <canvas id="sig-canvas" width="350" height="250">
            Get a better browser, bro.
          </canvas>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <button class="btn btn-primary" id="sig-submitBtn">ยืนยัน</button>
          <button class="btn btn-default" id="sig-clearBtn">ล้าง</button>
        </div>
      </div>
      <br />
      <div class="row d-none">
        <div class="col-md-12">
          <textarea id="sig-dataUrl" class="form-control" rows="5">
ข้อมูล ลายเซ็น</textarea
          >
        </div>
      </div>
      <br />
      <div class="row d-none">
        <div class="col-md-12">
          <img id="sig-image" src="https://www.pbru.ac.th/pbru/wp-content/uploads/2020/05/placeholder-1-840x560.png" alt="Signature image" width="350" height="250">
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>

      var canvas = document.querySelector('canvas');

      var signaturePad = new SignaturePad(canvas);

      // Returns signature image as data URL (see https://mdn.io/todataurl for the list of possible parameters)
	//   signaturePad.toDataURL(); // save image as PNG
    //   signaturePad.toDataURL('image/jpeg'); // save image as JPEG
    //   signaturePad.toDataURL('image/svg+xml'); // save image as SVG

      // Draws signature image from data URL.
      // NOTE: This method does not populate internal data structure that represents drawn signature. Thus, after using #fromDataURL, #toData won't work properly.
    //   signaturePad.fromDataURL('data:image/png;base64,iVBORw0K...');

      // Returns signature image as an array of point groups
    //   const data = signaturePad.toData();

      // Draws signature image from an array of point groups
    //   signaturePad.fromData(data);

      // Clears the canvas
    //   signaturePad.clear();

      // Returns true if canvas is empty, otherwise returns false
    //   signaturePad.isEmpty();

      // Unbinds all event handlers
    //   signaturePad.off();

      // Rebinds all event handlers
	//   signaturePad.on();

		const pngData = document.querySelector('#sig-dataUrl');
		const areaSig = document.querySelector('#sig-image');

	  const confirmSig = document.querySelector('#sig-submitBtn');
	  confirmSig.addEventListener('click', () => {

		if(signaturePad.isEmpty()) {
			pngData.innerHTML = 'โปรดเซ็นชื่อ ก่อนกดบันทึก'
			return
    }

    Swal.fire({
      title: 'ยันยันการบันทึก?',
      position: 'top',
      // text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'ยืนยัน',
      cancelButtonText: 'ยกเลิก'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: 'สำเร็จ!',
          position: 'top',
          // text:'กำลังปิดหน้าต่าง',
          icon:'success',
          willClose: () => {
            window.close()
          }
        }
        )
      }
    })

		let pngSig = signaturePad.toDataURL()
		console.log(pngSig)
		pngData.innerHTML = pngSig
		areaSig.setAttribute('src', pngSig)
	  })

	  const clearSig = document.querySelector('#sig-clearBtn');
	  clearSig.addEventListener('click', () => {
		signaturePad.clear();
		pngData.innerHTML = 'ข้อมูล ลายเซ็น'
		areaSig.setAttribute('src', 'https://www.pbru.ac.th/pbru/wp-content/uploads/2020/05/placeholder-1-840x560.png')
	  })

    </script>
  </body>
</html>
