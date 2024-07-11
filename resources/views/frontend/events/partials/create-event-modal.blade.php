<!-- Modal -->
<div class="modal fade" id="createEventModal" tabindex="-1" aria-labelledby="createEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="createEventModalLabel">Create new event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <x-buttons.secondary data-bs-dismiss="modal" aria-label="Close">Close</x-buttons.secondary>
                <x-buttons.primary iconPosition="right">Save changes</x-buttons.primary>
            </div>
        </div>
    </div>
</div>


@push('styles')
<style>
    /* Custom modal fade animation with faster speed */
    .modal.fade .modal-dialog {
      transition: transform 0.1s ease-out, opacity 0.1s ease-out; /* Reduced duration to 0.1s */
      transform: translate(0, 0);
    }
    .modal.fade.show .modal-dialog {
      transform: translate(0, 0);
    }
  </style>
  
@endpush