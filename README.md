# Bootstrap Components for Laravel Blade

A set of reusable Laravel Blade components based on Bootstrap 5. Perfect for quickly building UI elements in Laravel projects.

## Installation

1. Clone the repository:

```bash
git clone git@github.com:breuermarcel/bootstrap-components.git
```

2. Include the package via Composer:

```bash
composer require breuermarcel/bootstrap-components
```

## Usage

### Alert

```blade
<x-bc::alert color="success" dismissible icon="check-circle">
    Successfully saved!
</x-bc::alert>
```

| Attribute     | Description                                  | Example value                          |
| ------------- | -------------------------------------------- | -------------------------------------- |
| `color`       | Bootstrap alert color                        | `success`, `danger`, `warning`, `info` |
| `dismissible` | Shows a close button                         | `true` (Boolean)                       |
| `icon`        | Displays an icon inside the alert (optional) | `check-circle`, `exclamation-triangle` |

---

### Badge

```blade
<x-bc::badge type="primary">New</x-bc::badge>
```

| Attribute | Description          | Example value                          |
| --------- | -------------------- | -------------------------------------- |
| `type`    | Bootstrap badge type | `primary`, `secondary`, `danger`, etc. |

---

### Button

```blade
<x-bc::button color="primary" size="lg" href="https://example.com" target="_blank" title="Go to example">
    Click me
</x-bc::button>
```

| Attribute       | Description                                             | Example value                          |
| --------------- | ------------------------------------------------------- | -------------------------------------- |
| `color`         | Bootstrap button color                                  | `primary`, `secondary`, `danger`, etc. |
| `size`          | Button size                                             | `sm`, `lg`                             |
| `type`          | Button type attribute (only used if no href is present) | `button`, `submit`                     |
| `href`          | URL if used as a link                                   | `https://example.com`                  |
| `route`         | Laravel route name (overrides `href`)                   | `dashboard.home`                       |
| `routeParams`   | Parameters for the route                                | `['id' => 1]`                          |
| `dismiss`       | Dismiss target (for modals, alerts)                     | `modal`, `alert`                       |
| `toggle`        | Bootstrap toggle action (`collapse`, `dropdown`, etc.)  | `collapse`                             |
| `target`        | Target for toggle                                       | `exampleCollapse`                      |
| `stretchedLink` | Adds the `stretched-link` class                         | `true` (Boolean)                       |
| `title`         | HTML `title` attribute for tooltip text                 | `Click to open`                        |

---

### Checkbox (`check`)

```blade
<x-bc::check name="terms" label="Accept Terms & Conditions" switch checked />
```

| Attribute | Description                             | Example value               |
| --------- | --------------------------------------- | --------------------------- |
| `name`    | Input name                              | `terms`                     |
| `label`   | Label text                              | `Accept Terms & Conditions` |
| `checked` | Checked by default                      | `true` (Boolean)            |
| `switch`  | Renders the checkbox as a toggle switch | `true` (Boolean)            |

---

### Close

```blade
<x-bc::close />
```

| Attribute | Description           | Example value |
| --------- | --------------------- | ------------- |
| None      | Standard close button |               |

---

### Code

```blade
<x-bc::code>
    npm run dev
</x-bc::code>
```

| Attribute | Description                           | Example value |
| --------- | ------------------------------------- | ------------- |
| None      | Displays content inside `<code>` tags |               |

---

### Collapse

```blade
<x-bc::collapse button="Show more">
    Collapsible content goes here.
</x-bc::collapse>
```

| Attribute | Description                                      | Example value |
| --------- | ------------------------------------------------ | ------------- |
| `button`  | The text displayed on the collapse toggle button | `Show more`   |

---

### Container

```blade
<x-bc::container fluid>
    Your content here
</x-bc::container>

<x-bc::container size="lg">
    Large container content here
</x-bc::container>
```

| Attribute | Description                                     | Example value                 |
| --------- | ----------------------------------------------- | ----------------------------- |
| `fluid`   | Makes the container full-width                  | `true` (Boolean)              |
| `size`    | Sets the container size (Bootstrap breakpoints) | `sm`, `md`, `lg`, `xl`, `xxl` |

---

### Dropdown

```blade
<x-bc::dropdown label="Menu" icon="list" color="secondary" size="sm">
    <x-bc::dropdown.item href="#">Action 1</x-bc::dropdown.item>
    <x-bc::dropdown.item href="#">Action 2</x-bc::dropdown.item>
</x-bc::dropdown>
```

| Attribute | Description                                            | Example value                        |
| --------- | ------------------------------------------------------ | ------------------------------------ |
| `label`   | Label displayed on the dropdown button                 | `Menu`                               |
| `icon`    | Optional icon displayed next to the label              | `list`, `chevron-down`               |
| `color`   | Bootstrap button color for the dropdown toggle         | `primary`, `secondary`, `link`, etc. |
| `size`    | Button size                                            | `sm`, `lg`                           |
| `items`   | Optional slot for passing dropdown items as a variable | Blade component slot or array        |

---

### Form

_Work in progress — coming soon!_

---

### Popover

_Work in progress — coming soon!_

---

### Icon

```blade
<x-bc::icon name="check-circle" />
```

| Attribute | Description                          | Example value          |
| --------- | ------------------------------------ | ---------------------- |
| `name`    | Name of the Bootstrap icon to render | `check-circle`, `list` |

---

### Image

```blade
<x-bc::image src="https://via.placeholder.com/600x400" alt="Example image" title="Placeholder" />
```

| Attribute | Description                    | Example value                         |
| --------- | ------------------------------ | ------------------------------------- |
| `src`     | The image source URL           | `https://via.placeholder.com/600x400` |
| `alt`     | The alt text for accessibility | `Example image`                       |
| `title`   | Tooltip text shown on hover    | `Placeholder`                         |

---

### Label

```blade
<x-bc::label label="Username" />
```

| Attribute | Description                         | Example value |
| --------- | ----------------------------------- | ------------- |
| `label`   | The text content for the form label | `Username`    |

---

### Modal

_Work in progress — coming soon!_

---

### Navbar

_Work in progress — coming soon!_

---

### Offcanvas

_Work in progress — coming soon!_

---

### Select

_Work in progress — coming soon!_

---

### Table

_Work in progress — coming soon!_

---

### Textarea

_Work in progress — coming soon!_

---

### Toast

_Work in progress — coming soon!_

---

### Tooltip

_Work in progress — coming soon!_
