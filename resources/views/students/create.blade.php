<x-layout :heading="$heading">
    <div class="w-50 container-md mt-5">
        <form method="POST" action="{{ route('students.store') }}">
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

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Add</button>
                
                <a href="/" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
</x-layout>
