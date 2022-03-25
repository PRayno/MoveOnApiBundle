> # Package no longer maintained
> The v2 of the prayno/moveon package doesn't require the use of this library to be integrated in Symfony anymore


# MoveOnApiBundle
This is a Symfony bundle for the MoveOn API wrapper (https://github.com/PRayno/moveon)

## Installation
Install the library via Composer by running the following command:
`composer require prayno/moveon-api-bundle`

## Configuration
Create a config/packages/prayno_moveon_api.yaml file in your Symfony application with the following settings :
```yaml
prayno_moveon_api:
  service_url: "https://yourMoveOnApiInstance/restService/index.php"
  certificate_path: "/path/to/your/certificate/certificate.crt"
  key_file_path: "path/to/your/certificate/keyfile.pem"
  certificate_password: "passwordToReadYourCertificate"
```

## Usage
See https://github.com/PRayno/moveon#usage
