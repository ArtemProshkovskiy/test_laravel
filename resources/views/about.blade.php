<x-main>
    <x-slot:header>About</x-slot:header>

    <!-- Job Listings Section -->
    <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md mt-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Available Jobs</h1>

        @foreach($jobs as $job)
            <div class="job-item bg-gray-50 rounded-lg p-6 mb-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <!-- Job Link with Hover Effect -->
                <a class="text-xl font-medium text-blue-600 hover:text-blue-800" href="{{ url('/job/' . $job['id']) }}">
                    {{ $job['title'] }} (ID: {{ $job['id'] }})
                </a>

                <!-- Job Description -->
                <p class="mt-4 text-gray-700"><strong>Description:</strong> {{ $job['description'] }}</p>

                <!-- Job Salary -->
                <p class="mt-2 text-gray-700"><strong>Salary:</strong> {{ $job['salary'] }}</p>
            </div>
        @endforeach
    </div>
</x-main>
