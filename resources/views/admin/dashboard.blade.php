<x-app-layout>
      <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              {{ __('Dashboard for Admin') }}
          </h2>
      </x-slot>
  
      <div class="py-12">
          
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                  <div class="p-6 bg-white border-b border-gray-200">
                    <div class="col-sm-4">
                         <div class="card">
                           <div class="card-body">
                              <h5 class="card-title">Employee </h5>
                              <p class="card-text">See all Employee List </p>
                              <a class="btn btn-info" href="{{ route('employee.index') }}">Show</a>
                           </div>
                         </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card">
                          <div class="card-body">
                             <h5 class="card-title">Teacher </h5>
                             <p class="card-text">See all Teachers List </p>
                             <a class="btn btn-info" href="">Show</a>
                          </div>
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="card">
                          <div class="card-body">
                             <h5 class="card-title">Student </h5>
                             <p class="card-text">See all Students List </p>
                             <a class="btn btn-info" href="">Show</a>
                          </div>
                        </div>
                     </div>
                  </div>
              </div>
          </div>
      </div>
  </x-app-layout>