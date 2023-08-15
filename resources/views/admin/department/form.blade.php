@extends('admin.partials.head')
@section('content')
<style>
 
  .formbold-mb-5 {
    margin-bottom: 20px;
  }
  .formbold-pt-3 {
    padding-top: 12px;
  }
  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 550px;
    width: 100%;
  }
  .formbold-form-label {
    display: block;
    font-weight: 500;
    font-size: 16px;
    color: #07074d;
    margin-bottom: 12px;
  }
  .formbold-form-label-2 {
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 20px;
  }

  .formbold-form-input {
    width: 100%;
    padding: 12px 24px;
    border-radius: 6px;
    border: 1px solid #e0e0e0;
    background: white;
    font-weight: 500;
    font-size: 16px;
    color: #6b7280;
    outline: none;
    resize: none;
  }
  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold-btn {
    text-align: center;
    font-size: 16px;
    border-radius: 6px;
    padding: 14px 32px;
    border: none;
    font-weight: 600;
    background-color: #6a64f1;
    color: white;
    width: 100%;
    cursor: pointer;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold--mx-3 {
    margin-left: -12px;
    margin-right: -12px;
  }
  .formbold-px-3 {
    padding-left: 12px;
    padding-right: 12px;
  }
  .flex {
    display: flex;
  }
  .flex-wrap {
    flex-wrap: wrap;
  }
  .w-full {
    width: 100%;
  }
  @media (min-width: 540px) {
    .sm\:w-half {
      width: 50%;
    }
  }

</style>
<div class="app-page-title">
    <div class="page-title-wrapper">
      <div class="page-title-heading">
        <div class="page-title-icon"><i class="pe-7s-culture icon-gradient bg-mean-fruit"></i></div>
        <div>Add Department <div class="page-title-subheading">Admin dashboard. </div>
        </div>
      </div>
    </div>
</div>

<div class="formbold-main-wrapper">
    <div class="formbold-form-wrapper">
      <form action="{{ route('save_department') }}" method="POST">
        @csrf
        <div class="formbold-mb-5">
          <label for="name" class="formbold-form-label"> Department Name </label>
          <input
            type="text"
            name="department_name"
            id="name"
            placeholder="Full Name"
            class="formbold-form-input"
          />
        </div>
        <div class="formbold-mb-5">
          <label for="phone" class="formbold-form-label"> Status </label>
          <select class="formbold-form-input" name="status" style="height: 60px;">
            <option>Active</option>
            <option>InActive</option>
          </select>
        </div>
        <div class="formbold-mb-5">
          <label for="email" class="formbold-form-label"> Created By </label>
          <input
            style="text-transform: capitalize;"
            type="text" readonly
            name="created_by"
            value="{{ auth()->user()->name }}"
            class="formbold-form-input"
          />
        </div>
        {{-- <div class="flex flex-wrap formbold--mx-3">
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5 w-full">
              <label for="date" class="formbold-form-label"> Date </label>
              <input
                type="date"
                name="date"
                id="date"
                class="formbold-form-input"
              />
            </div>
          </div>
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <label for="time" class="formbold-form-label"> Time </label>
              <input
                type="time"
                name="time"
                id="time"
                class="formbold-form-input"
              />
            </div>
          </div>
        </div> --}}
  
        {{-- <div class="formbold-mb-5 formbold-pt-3">
          <label class="formbold-form-label formbold-form-label-2">
            Address Details
          </label>
          <div class="flex flex-wrap formbold--mx-3">
            <div class="w-full sm:w-half formbold-px-3">
              <div class="formbold-mb-5">
                <input
                  type="text"
                  name="area"
                  id="area"
                  placeholder="Enter area"
                  class="formbold-form-input"
                />
              </div>
            </div>
            <div class="w-full sm:w-half formbold-px-3">
              <div class="formbold-mb-5">
                <input
                  type="text"
                  name="city"
                  id="city"
                  placeholder="Enter city"
                  class="formbold-form-input"
                />
              </div>
            </div>
            <div class="w-full sm:w-half formbold-px-3">
              <div class="formbold-mb-5">
                <input
                  type="text"
                  name="state"
                  id="state"
                  placeholder="Enter state"
                  class="formbold-form-input"
                />
              </div>
            </div>
            <div class="w-full sm:w-half formbold-px-3">
              <div class="formbold-mb-5">
                <input
                  type="text"
                  name="post-code"
                  id="post-code"
                  placeholder="Post Code"
                  class="formbold-form-input"
                />
              </div>
            </div>
          </div>
        </div> --}}
  
        <div class="mt-4">
          <button type="submit" class="formbold-btn">Save Department</button>
        </div>
      </form>
    </div>
  </div>
  
@endsection