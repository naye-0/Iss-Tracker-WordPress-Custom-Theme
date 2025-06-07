# 🌍 ISS Tracker – Real-Time Location of the International Space Station

This is a **WordPress child theme** based on the official **Twenty Twenty-Two** theme. It displays the **real-time location of the International Space Station (ISS)** on an **interactive OpenStreetMap** using live data from a **REST API**.

The project uses **Advanced Custom Fields (ACF)** to manage map display and integrates **Leaflet.js** for rendering the interactive map.

---

## 🚀 Features

- Live location data of the ISS via REST API
- Interactive map with ISS icon using OpenStreetMap
- Built as a lightweight WordPress child theme
- Responsive design
- Easy customization via ACF (Advanced Custom Fields)

---

## 🛠️ Technologies Used

- WordPress (Parent theme: Twenty Twenty-Two)
- PHP (Child Theme)
- JavaScript (Leaflet.js)
- OpenStreetMap
- ACF (Advanced Custom Fields)
- REST API for ISS coordinates

---

## ⚙️ Local Installation

Follow these steps to set up the project on your local machine:

1. **Install WordPress locally**  
   You can use tools like [LocalWP](https://localwp.com/), XAMPP, or [DDEV](https://ddev.com)

2. **Clone this repository** into your WordPress themes directory:

```bash
cd wp-content/themes
git clone git@github.com:naye-0/Iss-Tracker-WordPress-Custom-Theme.git
```
    Take the cloned folder up a level to adhere to the rules of the WordPress folder hierarchy.

3. **Activate the child theme**  
   Go to your WordPress admin dashboard → **Appearance → Themes** → Activate the **ISS Tracker** theme.

4. **Install and activate the ACF plugin**  
   This plugin is required to manage custom fields for coordinates and map rendering.

5. **(Optional) Import ACF field group**  
   If an `acf-export.json` file is included, you can import it via:  
   **WordPress Admin → Custom Fields → Tools → Import Field Groups**

6. **View the ISS map**  
   Visit the page where the map is embedded and watch the ISS move across the globe in real time!