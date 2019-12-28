<style>
  .invalid-feedback {
    color: red;
  }
</style>

<h1>Update Student</h1>

<div style="margin:20px 0;">
  <a href="/student/create">
    <button>
      Add Student
    </button>
  </a>

  <a href="/student-list">
    <button>
      View Students
    </button>
  </a>
</div>


<form method="post" action="/student/update/{{ $student->id }}">
  @csrf
  <div>

    <!-- <input type="hidden" value="{{ $student->id }}" name="id"> -->
    <label for="name">Name</label>
    <input type="text" placeholder="Name" id="name" name="name" value="{{ $student->name }}">
    @if ($errors->has('name'))
    <span class="invalid-feedback">
      <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif
  </div>

  <div>
    <label for="email">Email Address</label>
    <input type="email" placeholder="Email Address" id="email" name="email" value="{{ $student->email }}">
    @if ($errors->has('email'))
    <span class="invalid-feedback">
      <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
  </div>

  <div>
    <label for="phone">Phone Number</label>
    <input type="text" placeholder="Phone Number" id="phone" name="phone" value="{{ $student->phone }}">
    @if ($errors->has('phone'))
    <span class="invalid-feedback">
      <strong>{{ $errors->first('phone') }}</strong>
    </span>
    @endif
  </div>
  <button>Update</button>
</form>