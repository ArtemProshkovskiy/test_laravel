<x-main>
    <!-- Header with the job title -->
    <x-slot:header>{{ $job['title'] }}</x-slot:header>

    <!-- Job Details Section -->
    <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md mt-6">
        <!-- Job Title -->
        <h1 class="text-3xl font-semibold text-gray-800">{{ $job['title'] }}</h1>

        <!-- Job Description -->
        <div class="mt-4 text-gray-700">
            <h2 class="text-xl font-medium text-gray-900">Job Description:</h2>
            <p class="mt-2">{{ $job['description'] }}</p>
        </div>

        <!-- Salary -->
        <div class="mt-4 text-gray-700">
            <h2 class="text-xl font-medium text-gray-900">Salary Range:</h2>
            <p class="mt-2">{{ $job['salary'] }}</p>
        </div>

        <!-- Back Button -->
        <div class="mt-6">
            <a href="{{ url('/about') }}" class="text-blue-500 hover:text-blue-700 hover:underline">Back to Job List</a>
        </div>
    </div>
</x-main>
