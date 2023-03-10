<x-layout :heading="$heading">
    <div class="w-50 container mt-5">
        <form method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ex. Juan Dela Cruz">
            </div>

            <div class="mb-3">
                <label for="course" class="form-label">Password</label>
                <input type="text" class="form-control" id="course" name="course" placeholder="Ex. BSIT">
            </div>

            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    placeholder="Ex. mail@email.com">
            </div>

            <div class="mb-3">
                <label class="form-label" for="email">Gender</label>
                <select name="gender" class="form-select">
                    @php
                        $genders = ['Male', 'Female', 'Others'];
                    @endphp

                    @foreach ($genders as $gender)
                        <option value="{{ $gender }}">{{ $gender }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-layout>
