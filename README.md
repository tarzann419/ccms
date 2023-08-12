<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a name="readme-top"></a>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project



The Unified Citizen Management System (UCMS) is an innovative and integrated platform that streamlines citizen information and services across various parastatals, including the Federal Road Safety Corps (FRSC), National Identity Management Commission (NIMC), and Independent National Electoral Commission (INEC). 


This system enhances efficiency and accessibility by enabling citizens and authorized agents to perform registration, view information, and make adjustments to citizen details using a unique identifier known as the National Identity Number (NIN).

Here's why:
* `Unmatched Convenience`: UCMS consolidates services from various government parastatals into a single platform, enabling citizens and agents to efficiently manage registrations, updates, and inquiries.

* `Efficiency Redefined`: Experience streamlined operations as authorized agents process tasks like vehicle registration and identity management swiftly, while the National Identity Number (NIN) ensures accurate data integration.

* `Error-Proof Data`: With the NIN as a unique identifier, UCMS minimizes errors, creating a reliable database that reduces inconsistencies and enhances accessibility.

* `Robust Security`: UCMS employs advanced security measures to safeguard private data, ensuring that only authorized personnel can access specific information.



<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Built With

* [![React][React.js]][React-url]
* [![Vue][Vue.js]][Vue-url]
* [![Laravel][Laravel.com]][Laravel-url]
* [![Bootstrap][Bootstrap.com]][Bootstrap-url]
* [![JQuery][JQuery.com]][JQuery-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

This is an example of how you may give instructions on setting up your project locally.
To clone and get a local copy up and running follow these simple example steps.

### Prerequisites

This is an example of how to list things you need to use the software and how to install them.
* npm
  ```sh
  npm install && npm run dev
  ```

### Installation

1. Clone or download the repo from [https://github.com/tarzann419/ccms](https://github.com/tarzann419/ccms)
2. Clone the repo
    ```sh
    git clone https://github.com/tarzann419/ccms.git
    ```
3. Open the project in your terminal and install composer
    ```sh
    composer install
    ```
    * Make sure this is in the root of the folder 'ccms'!
      
4.  Install NPM packages
    ```sh
    npm install
    ```
5.  Run NPM packages
    ```sh
    npm run dev
    ```
6. In the root of your project directory, make a copy of `.env.example`
    ```sh
    cp .env.example .env
    ```
7. Customize the `.env` with your database name and features. Should look something like this:
 ```php
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ccms
    DB_USERNAME=root
    DB_PASSWORD=root
   ```
8. Generate a new key for your project
    ```sh
    php artisan key:generate
    ```
9. Migrate all tables to the database
    ```sh
    php artisan migrate
    ```
10. Seed all the "dummy" data that we've extracted
    ```sh
    php artisan db:seed
    ```
11. Finally, run the project!
    ```sh
    php artisan serve
    ```



<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

Project should be available to you locally at `http://127.0.0.1:8000`

<p align="right">(<a href="#readme-top">back to top</a>)</p>


A demo of this project is live at: `https://shorturl.at/dwxHO`
[https://shorturl.at/dwxHO](https://shorturl.at/dwxHO)


* Default INEC login email: `inec@admin.com`
* Default INEC login password: `password`



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch 
3. Commit your Changes 
4. Push to the Branch 
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTACT -->
## Contact me at:

Your Name - [@iammrdann](https://twitter.com/iammrdann) - danogbo0@gmail.com

Project Link: [https://github.com/tarzann419/ccms](https://github.com/tarzann419/ccms)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ACKNOWLEDGMENTS -->
## Acknowledgments



<p align="right">(<a href="#readme-top">back to top</a>)</p>






<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: images/screenshot.png
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com 

