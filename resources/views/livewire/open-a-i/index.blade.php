<div class="flex">
    <link rel="stylesheet" href="/assets/css/chatAI.css">

    <div class="flex-1 flex flex-col">
        <x-slot name="header" class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-4">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Chat AI') }}
            </h2>
        </x-slot>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col mt-10">
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
                                <h3 class="text-lg font-semibold mt-4 mb-2">3. Contrast and Its Impact on Design
                                    Communication:</h3>
                                <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                    <li>Introduction to contrast and its significance in design.</li>
                                    <li>Exploring the use of color, typography, and scale to create contrast.</li>
                                    <li>How contrast guides the viewer's attention and conveys meaning.</li>
                                    <li>Case studies demonstrating effective use of contrast in real-world designs.</li>
                                </ul>
                                <h3 class="text-lg font-semibold mt-4 mb-2">4. Contrast and Its Impact on Design
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
            <footer class="bg-white border-t border-gray-200 p-4 w-full fixed bottom-0">
                <div class="max-w-5xl mx-auto">
                    <div class="flex items-center lg:gap-6 md:gap-6 sm:gap-4 gap-2">
                        <button class="toggle-btn ml-2" onclick="toggleHistory()">
                            <img width="25" height="25" src="assets/img/message.png"
                                alt="speech-bubble-with-dots" />
                        </button>
                        {{-- kiri --}}
                        <div class="flex bg-white border border-gray-200 rounded-lg flex-1">
                            <input type="text" placeholder="Write a prompt..."
                                class="flex-1 px-4 py-2 focus:outline-none focus:border-none no-border sm:text-sm md:text-base lg:text-lg">
                            <button class="p-2 text-blue-500 hover:bg-gray-100">
                                <svg class="w-5 h-5 rotate-90" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        {{-- kanan --}}
                        <button class="toggle-btn" onclick="#">
                            <span>+</span>
                        </button>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- History Sidebar -->
    <div id="historySidebar" class="history-sidebar hidden">
        <div class="history-content">
            <h3 class="text-lg font-semibold mb-2">History</h3>
            <div class="history-content overflow-y-auto max-h-full">
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
                            <button class="w-full text-left hover:bg-gray-50 p-2 rounded-lg">
                                <h4 class="font-medium text-gray-900 truncate">Layout Principles</h4>
                                <p class="text-sm text-gray-500 truncate">Discuss modern layout principles...</p>
                            </button>
                            <button class="w-full text-left hover:bg-gray-50 p-2 rounded-lg">
                                <h4 class="font-medium text-gray-900 truncate">Layout Principles</h4>
                                <p class="text-sm text-gray-500 truncate">Discuss modern layout principles...</p>
                            </button>
                            <button class="w-full text-left hover:bg-gray-50 p-2 rounded-lg">
                                <h4 class="font-medium text-gray-900 truncate">Layout Principles</h4>
                                <p class="text-sm text-gray-500 truncate">Discuss modern layout principles...</p>
                            </button>
                            <button class="w-full text-left hover:bg-gray-50 p-2 rounded-lg">
                                <h4 class="font-medium text-gray-900 truncate">Layout Principles</h4>
                                <p class="text-sm text-gray-500 truncate">Discuss modern layout principles...</p>
                            </button>
                            <button class="w-full text-left hover:bg-gray-50 p-2 rounded-lg">
                                <h4 class="font-medium text-gray-900 truncate">Layout Principles</h4>
                                <p class="text-sm text-gray-500 truncate">Discuss modern layout principles...</p>
                            </button>
                            <button class="w-full text-left hover:bg-gray-50 p-2 rounded-lg">
                                <h4 class="font-medium text-gray-900 truncate">Layout Principles</h4>
                                <p class="text-sm text-gray-500 truncate">Discuss modern layout principles...</p>
                            </button>
                            <button class="w-full text-left hover:bg-gray-50 p-2 rounded-lg">
                                <h4 class="font-medium text-gray-900 truncate">Layout Principles</h4>
                                <p class="text-sm text-gray-500 truncate">Discuss modern layout principles...</p>
                            </button>
                            <button class="w-full text-left hover:bg-gray-50 p-2 rounded-lg">
                                <h4 class="font-medium text-gray-900 truncate">Layout Principles</h4>
                                <p class="text-sm text-gray-500 truncate">Discuss modern layout principles...</p>
                            </button>
                            <button class="w-full text-left hover:bg-gray-50 p-2 rounded-lg">
                                <h4 class="font-medium text-gray-900 truncate">Layout Principles</h4>
                                <p class="text-sm text-gray-500 truncate">Discuss modern layout principles...</p>
                            </button>
                            <button class="w-full text-left hover:bg-gray-50 p-2 rounded-lg">
                                <h4 class="font-medium text-gray-900 truncate">Layout Principles</h4>
                                <p class="text-sm text-gray-500 truncate">Discuss modern layout principles...</p>
                            </button>
                            <!-- Repeat buttons as needed -->
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
                                <p class="text-sm text-gray-500 truncate">Creating and maintaining design systems...
                                </p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<script>
    function toggleHistory() {
        const sidebar = document.getElementById('historySidebar');
        sidebar.classList.toggle('hidden');
        sidebar.classList.toggle('visible');
    }
</script>
</div>
