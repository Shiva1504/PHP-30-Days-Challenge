# Day 2: Data Types & Type Casting 🔢

## 📖 Topics Covered
- PHP Data Types
  - String
  - Integer
  - Float (double)
  - Boolean
  - Array
  - Object
  - NULL
- Type Casting between data types

---

## 📝 Task
1. Create variables of different data types (string, int, float, boolean).
2. Print each variable using `var_dump()` to check its type.
3. Demonstrate type casting:
   - Convert string `"100"` to integer.
   - Convert float `12.56` to integer.
   - Convert integer `1` to boolean.
4. Print results clearly.

---

## ✅ Expected Output

string(5) "Hello"
int(25)
float(12.5)
bool(true)
int(100)
int(12)
bool(true)

---

## 🎯 Learning Notes
- `var_dump()` helps to inspect variable types.
- PHP automatically converts between types when needed (type juggling).
- Manual conversion: `(int)`, `(float)`, `(string)`, `(bool)` etc.
