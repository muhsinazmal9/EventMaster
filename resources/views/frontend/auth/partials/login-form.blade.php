<form action="/" method="post" class="mt-5">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control rounded-0" id="email" name="email" required autofocus>
    </div>
    <button type="submit" class="btn bg-black text-white px-4 py-2 rounded-0">Continue</button>
</form>

@push('scripts')
    <script>
        
    </script>
@endpush
