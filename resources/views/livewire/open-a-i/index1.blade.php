<div>
    <style>
        .history-sidebar {
            transition: transform 0.3s ease-in-out;
        }

        .history-sidebar.hidden {
            transform: translateX(-100%);
        }

        .history-content {
            flex: 1;
            overflow-y: auto;
        }

        .history-footer {
            position: sticky;
            bottom: 0;
            background: white;
            border-top: 1px solid #e5e7eb;
            padding: 1rem;
        }

        footer {
            position: sticky;
            bottom: 0;
            width: 100%;
        }

        .no-border {
            border: none;
        }

        .no-border:focus {
            outline: none;
            border: none;
        }
    </style>
    <div class="">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Chat AI') }}
            </h2>
        </x-slot>
        <!-- Navigation Sidebar -->
        <aside class="w-16 bg-white border-r border-gray-200 flex flex-col z-20">
            <div class="p-2">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/2025-02-18%2009%2032%2026-hnHIui7dXqOSyDgt8IEizO00u492Sx.png"
                    alt="Logo" class="w-8 h-8 rounded-lg mb-4">
                <nav class="space-y-2">
                    <button onclick="toggleHistory()"
                        class="w-full block p-2 text-gray-500 hover:bg-gray-100 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <!-- Add more nav items here -->
                </nav>
            </div>
            <div class="mt-auto p-2">
                <button class="p-2 text-gray-500 hover:bg-gray-100 rounded-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </button>
            </div>
        </aside>

        <!-- Chat History Sidebar -->
        {{-- <aside id="historySidebar"
            class="history-sidebar hidden w-64 bg-white border-r border-gray-200 flex flex-col z-10">
            <div class="p-4 border-b border-gray-200">
                <div class="relative">
                    <input type="search" placeholder="Search chat history..."
                        class="w-full px-4 py-2 bg-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 pl-10">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="history-content p-4">
                <div class="">
                    <!-- Today's Chats -->
                    <div class="p-4">
                        <h3 class="text-xs font-semibold text-gray-400 uppercase mb-4">Today</h3>
                        <div class="space-y-4">
                            <button class="w-full text-left hover:bg-gray-50 p-2 rounded-lg">
                                <h4 class="font-medium text-gray-900 truncate">Design Principles Essay Topics</h4>
                                <p class="text-sm text-gray-500 truncate">Generate a list of potential essay topics...
                                </p>
                            </button>
                            <button class="w-full text-left hover:bg-gray-50 p-2 rounded-lg">
                                <h4 class="font-medium text-gray-900 truncate">Color Theory Discussion</h4>
                                <p class="text-sm text-gray-500 truncate">Explain the basics of color theory...</p>
                            </button>
                        </div>
                    </div>

                    <!-- Previous 7 Days -->
                    <div class="p-4 border-t border-gray-200">
                        <h3 class="text-xs font-semibold text-gray-400 uppercase mb-4">Previous 7 Days</h3>
                        <div class="space-y-4">
                            <button class="w-full text-left hover:bg-gray-50 p-2 rounded-lg">
                                <h4 class="font-medium text-gray-900 truncate">Typography Guidelines</h4>
                                <p class="text-sm text-gray-500 truncate">Best practices for typography in web design...
                                </p>
                            </button>
                            <button class="w-full text-left hover:bg-gray-50 p-2 rounded-lg">
                                <h4 class="font-medium text-gray-900 truncate">Layout Principles</h4>
                                <p class="text-sm text-gray-500 truncate">Discuss modern layout principles...</p>
                            </button>
                        </div>
                    </div>

                    <!-- Previous 30 Days -->
                    <div class="p-4 border-t border-gray-200">
                        <h3 class="text-xs font-semibold text-gray-400 uppercase mb-4">Previous 30 Days</h3>
                        <div class="space-y-4">
                            <button class="w-full text-left hover:bg-gray-50 p-2 rounded-lg">
                                <h4 class="font-medium text-gray-900 truncate">UX Research Methods</h4>
                                <p class="text-sm text-gray-500 truncate">Overview of user research methods...</p>
                            </button>
                            <button class="w-full text-left hover:bg-gray-50 p-2 rounded-lg">
                                <h4 class="font-medium text-gray-900 truncate">Design Systems</h4>
                                <p class="text-sm text-gray-500 truncate">Creating and maintaining design systems...</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="history-footer">
                <button
                    class="w-full bg-blue-500 text-white rounded-lg px-4 py-2 hover:bg-blue-600 flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    New Chat
                </button>
            </div>
        </aside> --}}

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Top Navigation -->
            {{-- <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-4">
                <div class="flex items-center flex-1 max-w-2xl">
                    <input type="search" placeholder="Search"
                        class="w-full px-4 py-2 bg-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="flex items-center space-x-4">
                    <button class="p-2 text-gray-500 hover:bg-gray-100 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                            </path>
                        </svg>
                    </button>
                    <button class="p-2 text-gray-500 hover:bg-gray-100 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </button>
                    <button class="p-2 text-gray-500 hover:bg-gray-100 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                            </path>
                        </svg>
                    </button>
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/2025-02-18%2009%2032%2026-hnHIui7dXqOSyDgt8IEizO00u492Sx.png"
                        alt="Profile" class="w-8 h-8 rounded-full">
                </div>
            </header> --}}

            <!-- Chat Area -->
            <main class="flex-1 overflow-auto p-4">
                <div class="max-w-4xl mx-auto space-y-6">
                    <!-- Message -->
                    <div class="flex space-x-3">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/2025-02-18%2009%2032%2026-hnHIui7dXqOSyDgt8IEizO00u492Sx.png"
                            alt="User" class="w-8 h-8 rounded-full">
                        <div class="flex-1">
                            <p class="text-gray-600 mb-2">"Generate a list of potential essay topics for [design
                                principles], along with a brief outline of main points to be discussed"</p>
                        </div>
                    </div>

                    <!-- Response -->
                    <div class="flex space-x-3">
                        <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white">F
                        </div>
                        <div class="flex-1">
                            <div class="prose">
                                <h3 class="text-lg font-semibold mb-2">1. The Influence of Balance in Visual Design:
                                </h3>
                                <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                    <li>Introduction to balance as a fundamental design principle.</li>
                                    <li>Exploring symmetrical and asymmetrical balance.</li>
                                    <li>Examples of how balance impacts the perception of visual elements.</li>
                                    <li>The role of balance in various design disciplines.</li>
                                </ul>

                                <h3 class="text-lg font-semibold mt-4 mb-2">2. Contrast and Its Impact on Design
                                    Communication:</h3>
                                <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                    <li>Introduction to contrast and its significance in design.</li>
                                    <li>Exploring the use of color, typography, and scale to create contrast.</li>
                                    <li>How contrast guides the viewer's attention and conveys meaning.</li>
                                    <li>Case studies demonstrating effective use of contrast in real-world designs.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Input Area -->
            {{-- <footer class="bg-white border-t border-gray-200 p-4 fixed bottom-0 w-full">
                <div class="max-w-4xl mx-auto">
                    <div class="flex items-center bg-white border border-gray-200 rounded-lg">
                        <input type="text" placeholder="Write a prompt..."
                            class="flex-1 px-4 py-2 focus:outline-none">
                        <button class="p-2 text-blue-500 hover:bg-gray-100">
                            <svg class="w-5 h-5 rotate-90" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </footer> --}}
            <!-- Input Area -->
            <footer class="bg-white border-t border-gray-200 p-4 absolute bottom-0 w-full">
                <div class="max-w-4xl mx-auto">
                    <div class="flex items-center bg-white border border-gray-200 rounded-lg">
                        <input type="text" placeholder="Write a prompt..."
                            class="flex-1 px-4 py-2 focus:outline-none focus:border-none no-border">
                        <button class="p-2 text-blue-500 hover:bg-gray-100">
                            <svg class="w-5 h-5 rotate-90" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <script>
        function toggleHistory() {
            const sidebar = document.getElementById('historySidebar');
            sidebar.classList.toggle('hidden');
        }
    </script>
</div>
