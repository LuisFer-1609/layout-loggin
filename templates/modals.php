
<!-- Modal create Feed START -->
<div class="modal fade" id="modalCreateFeed" tabindex="-1" aria-labelledby="modalLabelCreateFeed" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <!-- Modal feed header START -->
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCreateFeed">Create post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- Modal feed header END -->

      <!-- Modal feed body START -->
      <div class="modal-body">
         <!-- Add Feed -->
         <div class="d-flex mb-3">
          <!-- Avatar -->
          <div class="avatar avatar-xs me-2">
            <img class="avatar-img rounded-circle" src="./Social - Network, Community and Event Theme_files/03(1).jpg" alt="">
          </div>
          <!-- Feed box  -->
          <form class="w-100">
            <textarea class="form-control pe-4 fs-3 lh-1 border-0" rows="4" placeholder="Share your thoughts..." autofocus=""></textarea>
          </form>
        </div>
        <!-- Feed rect START -->
        <div class="hstack gap-2">
          <a class="icon-md bg-success bg-opacity-10 text-success rounded-circle" href="https://social.webestica.com/index-classic.html#" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Photo" data-bs-original-title="Photo"> <i class="bi bi-image-fill"></i> </a>
          <a class="icon-md bg-info bg-opacity-10 text-info rounded-circle" href="https://social.webestica.com/index-classic.html#" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Video" data-bs-original-title="Video"> <i class="bi bi-camera-reels-fill"></i> </a>
          <a class="icon-md bg-danger bg-opacity-10 text-danger rounded-circle" href="https://social.webestica.com/index-classic.html#" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Events" data-bs-original-title="Events"> <i class="bi bi-calendar2-event-fill"></i> </a>
          <a class="icon-md bg-warning bg-opacity-10 text-warning rounded-circle" href="https://social.webestica.com/index-classic.html#" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Feeling/Activity" data-bs-original-title="Feeling/Activity"> <i class="bi bi-emoji-smile-fill"></i> </a>
          <a class="icon-md bg-light text-secondary rounded-circle" href="https://social.webestica.com/index-classic.html#" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Check in" data-bs-original-title="Check in"> <i class="bi bi-geo-alt-fill"></i> </a>
          <a class="icon-md bg-primary bg-opacity-10 text-primary rounded-circle" href="https://social.webestica.com/index-classic.html#" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Tag people on top" data-bs-original-title="Tag people on top"> <i class="bi bi-tag-fill"></i> </a>
        </div>
        <!-- Feed rect END -->
      </div>
      <!-- Modal feed body END -->

      <!-- Modal feed footer -->
      <div class="modal-footer row justify-content-between">
        <!-- Select -->
        <div class="col-lg-3">
          <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-select js-choice choices__input" data-position="top" data-search-enabled="false" hidden="" tabindex="-1" data-choice="active"><option value="PB" data-custom-properties="[object Object]">Public</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="PB" data-custom-properties="[object Object]" aria-selected="true">Public</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--1kxo-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="PV" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Custom</div><div id="choices--1kxo-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="PV" data-select-text="Press to select" data-choice-selectable="">Friends</div><div id="choices--1kxo-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="PV" data-select-text="Press to select" data-choice-selectable="">Only me</div><div id="choices--1kxo-item-choice-4" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="4" data-value="PB" data-select-text="Press to select" data-choice-selectable="">Public</div></div></div></div>
        </div>
        <!-- Button -->
        <div class="col-lg-8 text-sm-end">
          <button type="button" class="btn btn-danger-soft me-2"> <i class="bi bi-camera-video-fill pe-1"></i> Live video</button>
          <button type="button" class="btn btn-success-soft">Post</button>
        </div>
      </div>
      <!-- Modal feed footer -->

    </div>
  </div>
</div>
<!-- Modal create feed END -->

<!-- Modal create Feed photo START -->
<div class="modal fade" id="feedActionPhoto" tabindex="-1" aria-labelledby="feedActionPhotoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <!-- Modal feed header START -->
      <div class="modal-header">
        <h5 class="modal-title" id="feedActionPhotoLabel">Add post photo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- Modal feed header END -->

        <!-- Modal feed body START -->
        <div class="modal-body">
        <!-- Add Feed -->
        <div class="d-flex mb-3">
          <!-- Avatar -->
          <div class="avatar avatar-xs me-2">
            <img class="avatar-img rounded-circle" src="./Social - Network, Community and Event Theme_files/03(1).jpg" alt="">
          </div>
          <!-- Feed box  -->
          <form class="w-100">
            <textarea class="form-control pe-4 fs-3 lh-1 border-0" rows="2" placeholder="Share your thoughts..."></textarea>
          </form>
        </div>

        <!-- Dropzone photo START -->
        <div>
          <label class="form-label">Upload attachment</label>
          <div class="dropzone dropzone-default card shadow-none dz-clickable" data-dropzone="{&quot;maxFiles&quot;:2}">
            <div class="dz-message">
              <i class="bi bi-images display-3"></i>
              <p>Drag here or click to upload photo.</p>
            </div>
          </div>
        </div>
        <!-- Dropzone photo END -->

        </div>
        <!-- Modal feed body END -->

        <!-- Modal feed footer -->
        <div class="modal-footer ">
          <!-- Button -->
            <button type="button" class="btn btn-danger-soft me-2" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-success-soft">Post</button>
        </div>
        <!-- Modal feed footer -->
    </div>
  </div>
</div>
<!-- Modal create Feed photo END -->

<!-- Modal create Feed video START -->
<div class="modal fade" id="feedActionVideo" tabindex="-1" aria-labelledby="feedActionVideoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
     <!-- Modal feed header START -->
     <div class="modal-header">
      <h5 class="modal-title" id="feedActionVideoLabel">Add post video</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <!-- Modal feed header END -->

      <!-- Modal feed body START -->
      <div class="modal-body">
       <!-- Add Feed -->
       <div class="d-flex mb-3">
        <!-- Avatar -->
        <div class="avatar avatar-xs me-2">
          <img class="avatar-img rounded-circle" src="./Social - Network, Community and Event Theme_files/03(1).jpg" alt="">
        </div>
        <!-- Feed box  -->
        <form class="w-100">
          <textarea class="form-control pe-4 fs-3 lh-1 border-0" rows="2" placeholder="Share your thoughts..."></textarea>
        </form>
      </div>

      <!-- Dropzone photo START -->
      <div>
        <label class="form-label">Upload attachment</label>
        <div class="dropzone dropzone-default card shadow-none dz-clickable" data-dropzone="{&quot;maxFiles&quot;:2}">
          <div class="dz-message">
            <i class="bi bi-camera-reels display-3"></i>
                <p>Drag here or click to upload video.</p>
          </div>
        </div>
      </div>
      <!-- Dropzone photo END -->

    </div>
      <!-- Modal feed body END -->

      <!-- Modal feed footer -->
      <div class="modal-footer">
        <!-- Button -->
        <button type="button" class="btn btn-danger-soft me-2"><i class="bi bi-camera-video-fill pe-1"></i> Live video</button>
        <button type="button" class="btn btn-success-soft">Post</button>
      </div>
      <!-- Modal feed footer -->
    </div>
  </div>
</div>
<!-- Modal create Feed video END -->

<!-- Modal create events START -->
<div class="modal fade" id="modalCreateEvents" tabindex="-1" aria-labelledby="modalLabelCreateAlbum" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <!-- Modal feed header START -->
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCreateAlbum">Create event</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- Modal feed header END -->
      <!-- Modal feed body START -->
      <div class="modal-body">
        <!-- Form START -->
        <form class="row g-4">
          <!-- Title -->
          <div class="col-12">
            <label class="form-label">Title</label>
            <input type="email" class="form-control" placeholder="Event name here">
          </div>
          <!-- Description -->
          <div class="col-12">
            <label class="form-label">Description</label>
            <textarea class="form-control" rows="2" placeholder="Ex: topics, schedule, etc."></textarea>
          </div>
          <!-- Date -->
          <div class="col-sm-4">
            <label class="form-label">Date</label>
            <input type="text" class="form-control flatpickr flatpickr-input" placeholder="Select date" readonly="readonly">
          </div>
          <!-- Time -->
          <div class="col-sm-4">
            <label class="form-label">Time</label>
            <input type="text" class="form-control flatpickr flatpickr-input" data-enabletime="true" data-nocalendar="true" placeholder="Select time" readonly="readonly">
          </div>
          <!-- Duration -->
          <div class="col-sm-4">
            <label class="form-label">Duration</label>
            <input type="email" class="form-control" placeholder="1hr 23m">
          </div>
          <!-- Location -->
          <div class="col-12">
            <label class="form-label">Location</label>
            <input type="email" class="form-control" placeholder="Logansport, IN 46947">
          </div>
          <!-- Add guests -->
          <div class="col-12">
            <label class="form-label">Add guests</label>
            <input type="email" class="form-control" placeholder="Guest email">
          </div>
          <!-- Avatar group START -->
          <div class="col-12 mt-3">
            <ul class="avatar-group list-unstyled align-items-center mb-0">
              <li class="avatar avatar-xs">
                <img class="avatar-img rounded-circle" src="./Social - Network, Community and Event Theme_files/01(1).jpg" alt="avatar">
              </li>
              <li class="avatar avatar-xs">
                <img class="avatar-img rounded-circle" src="./Social - Network, Community and Event Theme_files/02(2).jpg" alt="avatar">
              </li>
              <li class="avatar avatar-xs">
                <img class="avatar-img rounded-circle" src="./Social - Network, Community and Event Theme_files/03(1).jpg" alt="avatar">
              </li>
              <li class="avatar avatar-xs">
                <img class="avatar-img rounded-circle" src="./Social - Network, Community and Event Theme_files/04(1).jpg" alt="avatar">
              </li>
              <li class="avatar avatar-xs">
                <img class="avatar-img rounded-circle" src="./Social - Network, Community and Event Theme_files/05(2).jpg" alt="avatar">
              </li>
              <li class="avatar avatar-xs">
                <img class="avatar-img rounded-circle" src="./Social - Network, Community and Event Theme_files/06(1).jpg" alt="avatar">
              </li>
              <li class="avatar avatar-xs">
                <img class="avatar-img rounded-circle" src="./Social - Network, Community and Event Theme_files/07.jpg" alt="avatar">
              </li>
              <li class="ms-3">
                <small> +50 </small>
              </li>
            </ul>
          </div>
          <!-- Upload Photos or Videos -->
          <!-- Dropzone photo START -->
          <div>
            <label class="form-label">Upload attachment</label>
            <div class="dropzone dropzone-default card shadow-none dz-clickable" data-dropzone="{&quot;maxFiles&quot;:2}">
              <div class="dz-message">
                <i class="bi bi-file-earmark-text display-3"></i>
                <p>Drop presentation and document here or click to upload.</p>
              </div>
            </div>
          </div>
          <!-- Dropzone photo END -->
        </form>
        <!-- Form END -->
      </div>
      <!-- Modal feed body END -->
      <!-- Modal footer -->
      <!-- Button -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger-soft me-2" data-bs-dismiss="modal"> Cancel</button>
        <button type="button" class="btn btn-success-soft">Create now</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal create events END -->
