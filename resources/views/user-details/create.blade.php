<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row p-4">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header"
                                     style="display: flex; justify-content: space-between; align-items: center;">
                                    <h3 class="card-title" style="flex: 1; text-align: center;"><strong>Create
                                            User</strong></h3>
                                </div>
                                <div class="card-body">
                                    <livewire:user-details.create/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>