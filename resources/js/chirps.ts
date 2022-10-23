// close flash message button click
const el = document.getElementById('flashMessage');
const btn = document.getElementById('flashClose');
if (el != null && btn != null) {
  btn.addEventListener('click', function handleClick() {
    if (el.style.display === 'none') {
      console.log('flashClose button clicked');
      el.style.display = 'block';
      btn.textContent = 'Hide element';
    } else {
      el.style.display = 'none';
      btn.textContent = 'Show element';
    }
  });
}

// listAdd button click
const buttonslistAdd = Array.from(document.getElementsByClassName('listAdd'));
buttonslistAdd.forEach(btn => {
  btn.addEventListener('click', function handleClick(event) {
    // console.log('listAdd button clicked');
    var clickableButton = btn as HTMLElement | null;
    if (clickableButton != null) {
      clickableButton.focus();
      clickableButton.classList.add('bg-gray-100');
      // console.log('listAdd data-chirp-id:',clickableButton.getAttribute('data-chrip-id'));
      const htmlForm = document.createElement('form');
      var clickableParent = clickableButton.parentNode as HTMLElement | null;
      
      var csrfToken = document?.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
      var formHTML = '<form class="mt-4"  action="/playlists" method="POST">'+
                      '<input type="hidden" name="_token" value="'+csrfToken+'">'+
                      '<div class="overflow-hidden shadow sm:rounded-md">'+
                        '<div class="bg-white px-2 py-2">'+
                          '<div class="grid grid-cols-6 gap-6">'+
                            '<div class="col-span-6">'+
                              '<label for="txtList" class="block text-sm font-medium text-gray-700">Add to List</label>'+
                                '<input type="text" name="title" autocomplete="txtList" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">'+
                                '<input type="hidden" name="txtChirpId" value="'+clickableButton.getAttribute('data-chrip-id')+'">'+
                                '<input type="hidden" name="gfx" value="sample-shirp.png">'+
                                '</div>'+
                              '</div>'+
                            '</div>'+
                          '<div class="bg-gray-50 px-2 py-3 text-right">'+
                            '<button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Save</button>'+
                          '</div>'+
                        '</div>'+
                      '</form>';
      clickableParent?.insertAdjacentHTML("afterend", formHTML);
      // clickableParent?.appendChild(htmlForm);
    }
  });
});

