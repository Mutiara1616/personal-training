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
            border-radius: 20px;
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
                
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                       const stars = document.querySelectorAll('.star');
                       const ratingInput = document.querySelector('input[name="rating"]');
                       
                       stars.forEach((star, index) => {
                           star.style.color = '#E5E7EB'; // Set initial gray color
                           
                           star.addEventListener('click', () => {
                               ratingInput.value = index + 1;
                               // Only update colors on click
                               stars.forEach((s, i) => {
                                   s.style.color = i <= index ? '#FFD700' : '#E5E7EB';
                               });
                           });
                       });
                    });
                </script>
                
                <div class="mb-6">
                    <p class="text-base mb-4">Please Rate The Personal Training Quality! (Optional)</p>
                    <div class="star-rating flex justify-center space-x-4">
                        <input type="hidden" name="rating" value="0">
                        <span class="star cursor-pointer text-5xl">★</span>
                        <span class="star cursor-pointer text-5xl">★</span>
                        <span class="star cursor-pointer text-5xl">★</span>
                        <span class="star cursor-pointer text-5xl">★</span>
                        <span class="star cursor-pointer text-5xl">★</span>
                    </div>
                </div>
                
                <div class="mb-6">
                    <p class="text-base mb-4">Do you have any thoughts to share? (Optional)</p>
                    <div class="textarea-container">
                        <textarea
                            name="feedback"
                            id="feedback"
                            class="w-full border border-gray-200 rounded-lg p-4 resize-none"
                            rows="4"
                            placeholder="Best Personal Training in my entire life! Highly Recommend"
                            onkeyup="countWords(this)"
                        ></textarea>

                        <div class="word-count" id="wordCount">
                            50 Words Left
                        </div>
                    </div>
                     
                    <script>
                        function countWords(textarea) {
                        const maxWords = 50;
                        const words = textarea.value.trim().split(/\s+/).filter(Boolean);
                        
                        if (words.length > maxWords) {
                            textarea.value = words.slice(0, maxWords).join(' ') + ' ';
                            document.getElementById('wordCount').textContent = '0 Words Left';
                            return false;
                        }
                        
                        const wordsLeft = maxWords - words.length;
                        document.getElementById('wordCount').textContent = `${wordsLeft} Words Left`;
                        return true;
                        }

                        document.getElementById('feedback').addEventListener('input', function(e) {
                        if (!countWords(this)) {
                            e.preventDefault();
                        }
                        });
                    </script>
                </div>
                
                <div class="flex justify-end">
                    <button type="submit" class="upload-button">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </x-app-layout>
</body>
</html>