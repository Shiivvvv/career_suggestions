# Career Guidance Website - TODO

## Plan
Build a modern, aesthetic career guidance website for 12th-class students using HTML, CSS, and JavaScript (no backend required).

## Steps Completed
1. [x] Create `index.html` – Form page with Stream and Percentage input
2. [x] Create `result.html` – JavaScript page that fetches JSON and displays results
3. [x] Create `style.css` – Modern, aesthetic, responsive styling with dark theme
4. [x] Create `careers.json` – External JSON file with career data
5. [x] Remove name input field from form
6. [x] Split Science into PCM/PCB with different career suggestions
7. [x] Redesign UI with modern aesthetic (glass morphism, gradients, animations)
8. [x] **Connect JSON directly to HTML via JavaScript Fetch API**

## Tech Stack
- HTML (structure)
- CSS (styling with glass morphism, gradients, animations)
- JavaScript (Fetch API to load JSON dynamically)
- JSON (external data storage)

## How JSON is Connected to HTML
- Form submits via **GET method** to `result.html?stream=Science_PCM&percentage=85`
- JavaScript reads URL parameters using `URLSearchParams`
- JavaScript uses **`fetch('careers.json')`** to load career data asynchronously
- Results are dynamically displayed based on stream and percentage tier
- **No PHP or backend server required** - works purely in the browser!

## Design Features
- **Dark theme** with deep blue/purple gradients
- **Glass morphism effect** using backdrop-filter on cards
- **Floating decorative shapes** with blur and slow animation
- **Animated header** with diagonal shine sweep effect
- **Gradient buttons** with hover shine animation
- **Card hover effects** with lift, scale, and colored left border
- **Glowing form inputs** with focus states
- **Poppins font** for professional typography
- **Fully responsive** design for mobile, tablet, and desktop

## Science Stream Split - PCM vs PCB
- **Science_PCM**: Engineering, Mathematics, Physics, Architecture, Computer Applications
- **Science_PCB**: Medical, Dental, Veterinary, Nursing, Pharmacy, Life Sciences

## How to Run
Simply open `index.html` in any modern web browser. No server needed!
Or use a local server:
```bash
npx serve .
```

