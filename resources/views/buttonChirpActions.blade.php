<div class="flex content-around flex-wrap">
    <div>
        <a href="{{ route('chirps.show', $chirp) }}" title="Show prattles" class="rounded shadow p-2 mr-4">
            <svg version="1.1" class="inline" width="24px" height="24px" stroke="#ddd" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"/></svg>
            <span class="inline-block align-middle">{{$chirp->prattles_count}}</span>
        </a>
    </div>
    <div>
        <a href="{{ route('chirps.show', $chirp) }}" title="Show prattles" class="rounded shadow p-2 mr-4">
            <svg version="1.1" class="inline" width="24px" height="24px" viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" transform="translate(1 3)"><path fill="#ddd" d="m11.9142136.5h3.5857864c1.1045695 0 2 .8954305 2 2v3.58578644c0 .26521649-.1053568.5195704-.2928932.70710678l-6.7928932 6.79289318c-.78104862.7810486-2.04737858.7810486-2.82842716 0l-3.17157288-3.1715728c-.78104858-.78104862-.78104858-2.04737858 0-2.82842716l6.79289324-6.79289322c.1875364-.18753638.4418903-.29289322.7071068-.29289322z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><path d="m7.5 13.5-2.01296191 1.006481c-.98795699.4939785-2.18930307.0935298-2.68328157-.8944272-.03127543-.0625509-.05924851-.1266991-.08380397-.1921803l-1.61484253-4.30624679c-.34775942-.92735845.03559029-1.96957132.90137249-2.45056144l7.49351749-4.16306527" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/><rect fill="currentColor" height="2" rx="1" width="2" x="14" y="2"/></g></svg>
            <span class="inline-block align-middle"></span>
        </a>
    </div>
    <div>
        <a href="javascript:void(0);" title="Share chirp: under construction" class="rounded shadow p-2 mr-4">
            <svg version="1.1" class="inline" stroke="#ddd" width="24px" height="24px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><title/><g><path fill="#ddd" d="M28.61,11.67H20l-2.66-8.2a1.39,1.39,0,0,0-2.64,0L12,11.67H3.39a1.39,1.39,0,0,0-.82,2.51l7,5.07L6.89,27.46a1.39,1.39,0,0,0,1.32,1.82A1.43,1.43,0,0,0,9,29l7-5.07L23,29a1.43,1.43,0,0,0,.81.27,1.39,1.39,0,0,0,1.32-1.82l-2.66-8.21,7-5.07A1.39,1.39,0,0,0,28.61,11.67Zm-7.34,6-1.17.86.44,1.38,2.09,6.41-5.45-4L16,21.46l-1.18.86-5.45,4,2.09-6.41.44-1.38-1.17-.86-5.45-4h8.19l.45-1.38L16,5.89l2.08,6.4.45,1.38h8.19Z"/></g></svg>
        </a>
    </div>
    <div>
        <a href="javascript:void(0);" title="Share chirp: under construction" class="rounded shadow p-2 mr-4">
            <svg version="1.1" class="inline" width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve"><g><g><path style="fill:#ddd;" d="M350.952,365.555l-116.654-70.641c9.257-25.04,9.263-52.77,0-77.827l116.654-70.641 c54.036,52.677,144.892,14.024,144.892-61.088C495.845,38.291,457.555,0,410.486,0c-56.883,0-98.202,55.029-81.763,109.836 L212.066,180.48c-20.605-22.727-50.347-37.023-83.367-37.023c-62.056,0-112.543,50.486-112.543,112.543 s50.486,112.543,112.543,112.543c33.02,0,62.762-14.297,83.367-37.022l116.657,70.644 c-16.415,54.729,24.798,109.836,81.763,109.836c47.067,0,85.359-38.291,85.359-85.358 C495.845,351.415,404.927,312.94,350.952,365.555z M410.486,42.829c23.451,0,42.53,19.078,42.53,42.528s-19.078,42.53-42.53,42.53 c-23.451,0-42.528-19.078-42.528-42.53C367.958,61.907,387.037,42.829,410.486,42.829z M128.697,325.712 c-38.439,0-69.713-31.273-69.713-69.713c0-38.441,31.273-69.713,69.713-69.713c38.441,0,69.712,31.273,69.712,69.713 C198.409,294.439,167.138,325.712,128.697,325.712z M410.486,469.171c-23.451,0-42.528-19.078-42.528-42.528 c0-23.451,19.078-42.53,42.528-42.53c23.451,0,42.53,19.078,42.53,42.53C453.016,450.092,433.938,469.171,410.486,469.171z"/></g></g></svg>
        </a>
    </div>
    <div>
        <a href="{{ route('chirps.show', $chirp) }}" title="Show chirp details" class="rounded shadow p-2 mr-4">
            <svg version="1.1" class="inline" width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 2H22V7" stroke="#ddd" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H11" stroke="#ddd" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13 11L21.5 2.5" stroke="#ddd" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
</div>