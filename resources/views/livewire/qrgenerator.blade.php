<div>
    <div class="p-2 text-gray-900">
          {{-- <img class="mx-auto border-4 border-gray-800 rounded-lg h-36" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/QR_Code_Example.svg/1200px-QR_Code_Example.svg.png" alt="">
           --}}
           <div>
            
           </div>
           <img id="qrcode_td" class="p-1 mx-auto border-4 border-black rounded-xl" 
           src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(150)
           ->merge('/public/img/cdc-rmd.jpg', .5, false)
           ->generate('RECORDS MANAGEMENT DIVISION
 Transaction of Date: 
 09/01/2023 9:00am;
 Control Number: TD-23-2009;
 Receiving Officer: Sean Tolentino;
 Contact Details: 499-1141; 
 599-9000 loc. 541-544;
 UID: 7190bba9f6361764d423317d202402d5')); !!}" alt="">
 <p id="qrcode_text_td" class="text-xs text-center">TD-23-2003</p> 
           {{-- {!! QrCode::format('png')->merge('https://www.seeklogo.net/wp-content/uploads/2016/09/facebook-icon-preview-1.png', .3, true)->size(150)->generate('http://www.simplesoftware.io'); !!} --}}
            <button id="print_td" class="block px-2 py-2 mx-auto mt-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
               <span class="inline">Print</span> <svg xmlns="http://www.w3.org/2000/svg" class="inline fill-white" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M128 0C92.7 0 64 28.7 64 64v96h64V64H354.7L384 93.3V160h64V93.3c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0H128zM384 352v32 64H128V384 368 352H384zm64 32h32c17.7 0 32-14.3 32-32V256c0-35.3-28.7-64-64-64H64c-35.3 0-64 28.7-64 64v96c0 17.7 14.3 32 32 32H64v64c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V384zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
            </button>
      </div>
</div>

