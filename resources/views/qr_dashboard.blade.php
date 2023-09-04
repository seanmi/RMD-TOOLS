<x-app-layout>
    <div class="h-px py-4 mx-auto mb-3 max-w-4xl sm:px-6 lg:px-8" >
      <div class="px-1 py-2 ml-1 text-center bg-white rounded-lg">
            <h3>QR Code Generator</h3>
      </div>
    </div>
    <div class="h-px py-6 mx-auto max-w-4xl sm:px-6 lg:px-8" style="height: 53rem">
        <div class="flex h-full space-x-4">
            <div class="w-full h-full mx-1 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <h3 class="px-2 pt-6 text-2xl font-bold text-center text-gray-800">TRANSMITTAL DOCUMENT (TD)</h3>
                <livewire:qrgenerator /> 
                <hr class="mx-2 border-2 rounded-xl">
                <div class="px-2 py-4">
                  <form action="{{route('documentcounter.set')}}" method="POST">
                    @csrf
                    <div class="rounded-md shadow-sm sm:flex">
                      <span class="inline-flex items-center w-full px-4 py-3 -mt-px -ml-px text-sm text-gray-500 border border-gray-200 min-w-fit bg-gray-50 first:rounded-t-lg last:rounded-b-lg sm:w-auto sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">TD</span>
                      <input name="subcode" value="{{$active_document_counter_td == null ? '' : $active_document_counter_td->subcode}}" type="number" placeholder="Subcode: e.g. 23" class="relative block w-full px-4 py-3 -mt-px -ml-px text-sm border-gray-200 shadow-sm pr-11 first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                      <input name="transaction_number" value="{{$active_document_counter_td == null ? '' : $active_document_counter_td->starting_point}}" type="number" placeholder="Sequence: e.g. 1000 " class="relative block w-full px-4 py-3 -mt-px -ml-px text-sm border-gray-200 shadow-sm pr-11 first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                      <input name="document_type" type="hidden" value="td">
                      <button title="Submit" type="submit" class="inline-flex flex-shrink-0 justify-center items-center h-[2.875rem] w-[2.875rem] rounded-r-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white"  height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"/></svg>
                      </button>
                    </div>
                  </form>
                </div>
                <hr class="mx-2 border-2 rounded-xl">
                {{--start table  --}}
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="p-2 overflow-hidden">
                          <table
                            class="min-w-full text-sm font-light text-center border dark:border-neutral-500">
                            <thead class="font-medium border-b dark:border-neutral-500">
                              <tr>
                                <th
                                  scope="col"
                                  class="px-6 py-4 border-r dark:border-neutral-500">
                                  #
                                </th>
                                <th
                                  scope="col"
                                  class="px-6 py-4 border-r dark:border-neutral-500">
                                  Received by
                                </th>
                                <th
                                  scope="col"
                                  class="px-6 py-4 border-r dark:border-neutral-500">
                                  Transaction Date
                                </th>
                                <th scope="col" class="px-6 py-4">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="border-b dark:border-neutral-500">
                                <td
                                  class="px-6 py-4 font-medium border-r whitespace-nowrap dark:border-neutral-500">
                                  1
                                </td>
                                <td
                                  class="px-6 py-4 border-r whitespace-nowrap dark:border-neutral-500">
                                  Mark
                                </td>
                                <td
                                  class="px-6 py-4 border-r whitespace-nowrap dark:border-neutral-500">
                                  Otto
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">@mdo</td>
                              </tr>
                              <tr class="border-b dark:border-neutral-500">
                                <td
                                  class="px-6 py-4 font-medium border-r whitespace-nowrap dark:border-neutral-500">
                                  2
                                </td>
                                <td
                                  class="px-6 py-4 border-r whitespace-nowrap dark:border-neutral-500">
                                  Jacob
                                </td>
                                <td
                                  class="px-6 py-4 border-r whitespace-nowrap dark:border-neutral-500">
                                  Thornton
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">@fat</td>
                              </tr>
                              <tr class="border-b dark:border-neutral-500">
                                <td
                                  class="px-6 py-4 font-medium border-r whitespace-nowrap dark:border-neutral-500">
                                  3
                                </td>
                                <td
                                  colspan="2"
                                  class="px-6 py-4 border-r whitespace-nowrap dark:border-neutral-500">
                                  Larry the Bird
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">@twitter</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                {{-- end table --}}
            </div>
        </div>
    </div>
    <script>
    // Get references to the image and button
      const qrCodeImage = document.getElementById('qrcode_td');
      const printButton = document.getElementById('print_td');

      // Define the desired size in millimeters and DPI
      const desiredSizeInMM = 24; // 24mm
      const DPI = 300; // 300 DPI

      // Calculate the pixel size
      const pixelSize = (desiredSizeInMM / 25.4) * DPI;

      // // Set the size of the image using CSS
      // qrCodeImage.style.width = pixelSize + 'px';
      // qrCodeImage.style.height = pixelSize + 'px';

      // Add a click event listener to the print button
      printButton.addEventListener('click', () => {
        var divContents = document.getElementById("qrcode_td");
        var qrcode_text_td = document.getElementById("qrcode_text_td");
        // alert(divContents.src)
            alert(divContents)
            console.log(divContents)
            var a = window.open('', '', 'width=20px');
            a.document.write('<html style="margin-left:3px">');
            // a.document.write('<h3 style="font-family: Tahoma, "Trebuchet MS", sans-serif; text-align:center">Scan Me</h3>');
            a.document.write(`<div style="text-align:center;margin:0px">`);
            a.document.write(`<img style="border:4px solid black;height:60px;padding:0.25rem;border-radius:0.75rem" src="${divContents.src}">`);
            a.document.write(`<p style="font-weight:bold;font-size:0.50rem; margin-top:0px;padding-top:1px">${qrcode_text_td.innerHTML}<p>`);
            a.document.write(`<div>`);
            a.document.write('</body></html>');
            a.onafterprint = a.close;
            a.print();
            a.document.close();
      });
  
   
    </script>
</x-app-layout>
