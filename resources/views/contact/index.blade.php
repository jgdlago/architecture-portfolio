@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        @foreach ($contacts as $contact)
            <form method="POST" action="{{ route('contact.update', $contact) }}" class="w-full max-w-md">
                @csrf
                @method('PUT')

                <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-4">
                    <dl>
                        <div class="px-4 py-5 sm:px-6 flex flex-col items-center">
                            <dt class="text-sm font-medium text-gray-500 mb-2">E-mail</dt>
                            <dd class="mt-1 w-3/4 text-sm text-center text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="email" name="email" value="{{ $contact->email }}" required class="mb-4 text-center w-3/4 bg-gray-100 px-6 py-2 rounded-md">
                            </dd>
                        </div>
                        <div class="px-4 py-5 sm:px-6 flex flex-col items-center">
                            <dt class="text-sm font-medium text-gray-500 mb-2">Telefone</dt>
                            <dd class="mt-1 w-3/4 text-sm text-center text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" name="phone" value="{{ $contact->phone }}" required class="mb-4 text-center w-3/4 bg-gray-100 px-6 py-2 rounded-md">
                            </dd>
                        </div>
                        <div class="px-4 py-5 sm:px-6 flex flex-col items-center">
                            <dt class="text-sm font-medium text-gray-500 mb-2">WhatsApp</dt>
                            <dd class="mt-1 w-3/4 text-sm text-center text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" name="whatsapp_number" value="{{ $contact->whatsapp_number }}" required class="mb-4 text-center w-3/4 bg-gray-100 px-6 py-2 rounded-md">
                            </dd>
                        </div>
                        <div class="px-4 py-5 sm:px-6 flex flex-col items-center">
                            <dt class="text-sm font-medium text-gray-500 mb-2">Endereço</dt>
                            <dd class="mt-1 w-3/4 text-sm text-center text-gray-900 sm:mt-0 sm:col-span-2">
                                <textarea name="address" required class="mb-4 text-center w-3/4 bg-gray-100 px-6 py-2 rounded-md">{{ $contact->address }}</textarea>
                            </dd>
                        </div>
                        <div class="px-4 py-5 sm:px-6 flex flex-col items-center">
                            <dt class="text-sm font-medium text-gray-500 mb-2">LinkedIn</dt>
                            <dd class="mt-1 w-3/4 text-sm text-center text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" name="linkedin" value="{{ $contact->linkedin }}" required class="mb-4 text-center w-3/4 bg-gray-100 px-6 py-2 rounded-md">
                            </dd>
                        </div>
                    </dl>
                </div>

                <div class="mt-4 flex justify-center">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        @endforeach
    </div>
@endsection
