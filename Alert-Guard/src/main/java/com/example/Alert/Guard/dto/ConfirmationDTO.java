package com.example.Alert.Guard.dto;
import com.example.Alert.Guard.entity.UserRole;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;
@Data
@AllArgsConstructor
@NoArgsConstructor
public class ConfirmationDTO {
    private Long confirmationId;
    private UserDTO user;
    private String confirmationToken;
    private boolean confirmed;
}