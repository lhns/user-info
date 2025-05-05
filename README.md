# User Info Dashboard

This is a lightweight PHP-based user dashboard that displays authenticated user information (username, name, email, and groups) and dynamically renders access badges for various services based on group membership.
You can use this with forward-

## Features

- Displays:
  - Username
  - Email
  - Full name
  - List of group memberships
- Dynamically generates
  - Green badge for access (`yes`)
  - Red badge for no access (`no`)
  - Labels split with service name and access status
- Tooltips on badges display required groups
- Access rules are configured using an environment variable

## Requirements

- PHP 7.0+
- Web server (e.g., Apache, Nginx with PHP-FPM)
- `$_SERVER` variables set by authentication proxy or reverse proxy

## Configuration

### Environment Variables

| Variable        | Description                                                  |
|----------------|--------------------------------------------------------------|
| `ACCESS_MATRIX` | JSON object mapping services to required groups (see below) |

### Example `ACCESS_MATRIX`

```json
{
  "GitLab": ["Admin", "GitLab"],
  "Grafana": [],
  "Portainer": ["Admin", "Portainer"]
}
```

## License

This project uses the Apache 2.0 License. See the file called LICENSE.
