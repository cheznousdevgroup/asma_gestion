<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/css/jdataTables.css')}}" />
     <!-- Favicon -->
     <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/asma.ico') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.4.2/uicons-solid-rounded/css/uicons-solid-rounded.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-thin-rounded/css/uicons-thin-rounded.css'>
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-rounded/css/uicons-regular-rounded.css"
    />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.4.2/uicons-bold-rounded/css/uicons-bold-rounded.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.4.2/uicons-bold-straight/css/uicons-bold-straight.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-straight/css/uicons-regular-straight.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>
    <title>Asma boutique - Gestion</title>
    <title>{{ config('app.name', 'Asma boutique -Gestion') }}</title>
    <style type="text/tailwindcss">
      @layer utilities {
        .menu > li {
          /* width: 211px; */
          padding: 15px;
          margin-block: 15px;
          cursor: pointer;
        }
        .activeItem {
          border-radius: 25px 0px 0px 25px;
          border-right: 0;
          position: relative;
          color: #075985;
          background: #f1f5f9;
          /* background: #2c649c; */
        }

        #operation-container-2 div:hover {
          background-color: #334155;
        }
        .activeItem::after,
        .activeItem::before {
          content: "";
          position: absolute;
          width: 30px;
          height: 30px;
          right: -0.7px;
          background-image: url("data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22259.51%22 height=%22259.52%22 viewBox=%220 0 259.51 259.52%22%3E%3Cpath id=%22Path_143%22 data-name=%22Path 143%22 d=%22M8659.507,423.965c-.167-2.608.05-5.319-.19-8.211-.084-1.012-.031-2.15-.118-3.12-.113-1.25-.1-2.682-.236-4.061-.172-1.722-.179-3.757-.365-5.394-.328-2.889-.478-5.857-.854-8.61-.509-3.714-.825-7.252-1.38-10.543-.934-5.535-2.009-11.312-3.189-16.692-.855-3.9-1.772-7.416-2.752-11.2-1.1-4.256-2.394-8.149-3.687-12.381-1.1-3.615-2.366-6.893-3.623-10.493-1.3-3.739-2.917-7.26-4.284-10.7-1.708-4.295-3.674-8.078-5.485-12.023-1.145-2.493-2.5-4.932-3.727-7.387-1.318-2.646-2.9-5.214-4.152-7.518-1.716-3.16-3.517-5.946-5.274-8.873-1.692-2.818-3.589-5.645-5.355-8.334-2.326-3.542-4.637-6.581-7.039-9.848-2.064-2.809-4.017-5.255-6.088-7.828-2.394-2.974-4.937-5.936-7.292-8.589-3.027-3.411-6.049-6.744-9.055-9.763-2.4-2.412-4.776-4.822-7.108-6.975-3-2.767-5.836-5.471-8.692-7.854-3.332-2.779-6.657-5.663-9.815-8.028-2.958-2.216-5.784-4.613-8.7-6.6-3.161-2.159-6.251-4.414-9.219-6.254-3.814-2.365-7.533-4.882-11.168-6.89-4.213-2.327-8.513-4.909-12.478-6.834-4.61-2.239-9.234-4.619-13.51-6.416-4.1-1.725-8.11-3.505-11.874-4.888-4.5-1.652-8.506-3.191-12.584-4.47-6.045-1.9-12.071-3.678-17.431-5-9.228-2.284-17.608-3.757-24.951-4.9-7.123-1.112-13.437-1.64-18.271-2.035l-2.405-.2c-1.638-.136-3.508-.237-4.633-.3a115.051,115.051,0,0,0-12.526-.227h259.51Z%22 transform=%22translate(-8399.997 -164.445)%22 fill=%22%23f1f5f8%22/%3E%3C/svg%3E");
          background-size: 100% 100%;
        }
        .activeItem::before {
          top: 1px;
          margin-top: -30.9px;
          transform: translateY(-100%);
          transform: rotate(90deg);
        }
        .activeItem::after {
          transform: translateY(100%);
          bottom: 1px;
        }
        .color-transparent{
          background-color: #f97416aa;
          color: #f1f5f9;
        }
        .isVisible {
          display: block;
        }
        .isContentVisible {
          display: grid;
        }
        .isContentHidden {
          display: none;
        }
        .isHidden {
          display: none;
        }

        .isAbsolute {
          position: absolute;
          background: #0c4a6e;
          margin: 0;
          height: 200vh;
          /* overflow-y: hidden; */
          width: 100%;
          z-index: 1000;
        }
        .isNotAbsolute {
          position: relative;
          /* background: #0f172a; */
        }
      }
    </style>

</head>
@yield('body')
@yield('script')
</html>
