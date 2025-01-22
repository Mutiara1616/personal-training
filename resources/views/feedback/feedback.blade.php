<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Give Feedback</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        .star-rating {
            color: #FFD700;
            font-size: 24px;
        }
        
        .star-rating .star {
            margin-right: 8px;
        }
        
        .upload-button {
            background-color: #3B4FBF;
            color: white;
            padding: 8px 24px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .upload-button svg {
            width: 16px;
            height: 16px;
        }
        
        .feedback-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            padding: 24px;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .textarea-container {
            position: relative;
            margin-top: 16px;
        }
        
        .word-count {
            position: absolute;
            bottom: 12px;
            right: 12px;
            color: #6B7280;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 4px;
        }
    </style>
</head>
<body class="bg-white">
    <x-app-layout>
        <div class="feedback-container mt-20 mb-10">
            <h1 class="text-2xl font-bold mb-6">Give Feedback</h1>
            
            <form action="{{ route('feedback.store') }}" method="POST">
                @csrf
                
                <div class="mb-6">
                    <p class="text-base mb-4">Please Rate The Personal Training Quality! (Optional)</p>
                    <div class="star-rating flex">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star" style="color: #E5E7EB;">★</span>
                    </div>
                </div>
                
                <div class="mb-6">
                    <p class="text-base mb-4">Do you have any thoughts to share? (Optional)</p>
                    <div class="textarea-container">
                        <textarea
                            name="feedback"
                            class="w-full border border-gray-200 rounded-lg p-4 resize-none"
                            rows="4"
                            placeholder="Best Personal Training in my entire life! Highly Recommend"
                        ></textarea>
                        <div class="word-count">
                            240 Words Left
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                                <line x1="9" y1="9" x2="9.01" y2="9"/>
                                <line x1="15" y1="9" x2="15.01" y2="9"/>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-end">
                    <button type="submit" class="upload-button">
                        Upload
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 8l-5-5-5 5M12 3v12"/>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </x-app-layout>
</body>
</html>